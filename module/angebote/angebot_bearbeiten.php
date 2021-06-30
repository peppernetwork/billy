<?php
include '../../inc/header.php';
include '../../inc/nav.php';
?>

     <link rel="stylesheet" href="../../css/angebot.css" type="text/css">

<style>

textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}	
</style>

<script src="../../js/angebot_erstellen.js"></script>

<section>

<h1>Angebot bearbeiten</h1>

<?php
    if(isset($_GET["angebot-bearbeiten"])){

//Datenbank-Verbindung herstellen
include '../../inc/connect.php';

    //Nutzereingabe aus Angebotposition in Variablen speichern
	$kunde = $_POST["kunde"];
	$anrede = $_POST["anrede"];
	$datum = $_POST["datum"];
	$referenz = $_POST["referenz"];
	$zahlungsbedingungen = $_POST["zahlungsbedingungen"];
	$netto = $_POST["netto"];
	$mwst = $_POST["mwst"];
	$brutto = $_POST["brutto"];
	$pos1anz = $_POST['anz'][0];
	$pos1einheit = $_POST['einheit'][0];
	$pos1dsc = $_POST['dsc'][0];
	$pos1ep = $_POST['ep'][0];
	$pos1rab = $_POST['posrab'][0];
	$pos2anz = $_POST['anz'][1];
	$pos2einheit = $_POST['einheit'][1];
	$pos2dsc = $_POST['dsc'][1];
	$pos2ep = $_POST['ep'][1];
	$pos2rab = $_POST['posrab'][1];

    // 3. String für SQL-Anweisung erstellen
	$insertString = "INSERT INTO angebote (kunde, anrede, datum, referenz, zahlungsbedingungen, netto, mwst, brutto, pos1anz, pos1einheit, pos1dsc, pos1ep, pos1rab, pos2anz, pos2einheit, pos2dsc, pos2ep, pos2rab)
	VALUES ('$kunde', '$anrede', '$datum', '$referenz', '$zahlungsbedingungen', '$netto', '$mwst', '$brutto', '$pos1anz', '$pos1einheit', '$pos1dsc', '$pos1ep', '$pos1rab', '$pos2anz', '$pos2einheit', '$pos2dsc', '$pos2ep', '$pos2rab');";

    // SQL-Anweisung durchfuehren
    $check = mysqli_query($connect, $insertString);

    if($check) {
        echo '<span style="color: green;" /><strong>Angebot erfolgreich erstellt</strong></span>';
    }}

// Hier wird der Kunde ausgegeben, welcher zuvor ausgewÃ¤hlt wurde.

  // Kundenauswahl Verarbeitung
    // 1. Verbindung zur Datenbank herstellen
	include '../../inc/connect.php';

    // 2. Prüfe Radio-Button-Auswahl
	if(isset($_GET["auswahl"])){

    // 3. Datenbankabfrage starten
	$id = $_GET["auswahl"];
	$abfrage = "SELECT * FROM angebote WHERE angebotid = $id";
	$result = mysqli_query($connect, $abfrage);

    // 4. Datensatz in Variablen speichern
	$dsatz = mysqli_fetch_assoc($result);
	$angebotnr = $dsatz["angebotid"];
	$kunde = $dsatz["kunde"];
	$anrede = $dsatz["anrede"];
	$datum = $dsatz["datum"];
	$referenz = $dsatz["referenz"];
	$zahlungsbedingungen = $dsatz["zahlungsbedingungen"];
	$netto = $dsatz["netto"];
	$mwst = $dsatz["mwst"];
	$brutto = $dsatz["brutto"];
	$pos1anz = $dsatz["pos1anz"];
	$pos1einheit = $dsatz["pos1einheit"];
	$pos1dsc = $dsatz["pos1dsc"];
	$pos1ep = $dsatz["pos1ep"];
	$pos1rab = $dsatz["pos1rab"];	
	$pos2anz = $dsatz["pos2anz"];
	$pos2einheit = $dsatz["pos2einheit"];
	$pos2dsc = $dsatz["pos2dsc"];
	$pos2ep = $dsatz["pos2ep"];
	$pos2rab = $dsatz["pos2ab"];
}		

    // 5. Das Bearbeiten-Formular anzeigen
	echo "<form action='angebot_erstellen.php' method='post'>";
	echo "<div class='column3'>";
	echo "<input name='id' type='hidden' value='$id'>";
	echo "<textarea name='kunde' rows='10' cols='30'>$kunde</textarea>";
	echo "</div>";

// Hier werden Systemeinstellungen ausgegeben

    // 1. Systemeinstellungen Abfrage
	$sysid = 1;
	$sysabfrage = "SELECT mwst FROM einstellungen WHERE id = $sysid";
	$sysresult = mysqli_query($connect, $sysabfrage);

    // 2. Datensatz von Systemeinstellungen in Variablen speichern
	$sysein = mysqli_fetch_assoc($sysresult);
	$steuersatz = $sysein["mwst"];

// Hier wird die Artikelsuche ausgegeben

    // 1. Artikeldaten Abfrage
	$abfrageartikelsuche = "select artikelname from artikel";
	$resultartikelsuche = mysqli_query($connect, $abfrageartikelsuche) or die("Error " . mysqli_error($connect));
?>

<!-- Artikelsuche -->
<datalist id="artikelliste">
  <?php while($row = mysqli_fetch_array($resultartikelsuche)) { ?>
    <option value="<?php echo $row['artikelname']; ?>"><?php echo $row['artikelname']; ?></option>
  <?php } ?>
</datalist>
  <?php mysqli_close($connect); ?>

<!-- Obere Eingabemaske -->
<div class="column3">
 <?php echo "<textarea name='anrede' id='anrede' rows='10' cols='30' placeholder='Anrede'/>$anrede</textarea>"; ?>
</div>
<div class="column3">
  <?php
    echo "<input type='date' name='datum' value='$datum' />";
    echo "<input type='text' disabled name='angebotid' placeholder='Angebotsnummer (wird automatisch vergeben)' value='Angebot Nr. $angebotnr' />";
    echo "<input type='text' name='referenz' placeholder='Referenz' value='$referenz' />";
  ?>
</div>

<!-- Hier beginnt die Angebotsbearbeitung fÃ¼r Positionen -->
<!-- Positionen -->
<div>
  <table class="plist" style="font-size:10px;">
    <thead>
      <tr>
        <th style="width:100px;">Menge</th>
        <th style="width:100px;border-left:1px solid grey;">Einheit</th>
        <th style="width:900px;border-left:1px solid grey;">Beschreibung</th>
        <th style="width:100px;border-left:1px solid grey;">EP Netto</th>
        <th style="width:100px;border-left:1px solid grey;">Pos. Rabatt &euro;</th>
        <th style="width:100px;border-left:1px solid grey;">Pos. Rabatt %</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody id="docpos">
      <tr>
        <td valign=top style="width:100px;"><?php echo "<input type=text class='anz' name='anz[]' value='$pos1anz' size='4' />"; ?></td>
        <td valign=top style="width:100px;">
          <select name='einheit[]'>
	    <?php echo "<option>$pos1einheit</option>"; ?>
	    <option>-----</option>
            <option value='Lfm.'>Lfm.</option>
            <option value='Pal.'>Pal.</option>
            <option value='pschl.'>pschl.</option>
            <option value='Pkg.'>Pkg.</option>
            <option value='Std.'>Std.</option>
            <option value='Stk.'>Stk.</option>
          </select>
        </td>
        <td valign=top><input type="text" list="artikelliste" name="artikelsuche" id="artikelsuche" autocomplete="off" placeholder="Artikelsuche" style="width:700px;"><button type="button" class="button3" style="width:185px;">Artikel &uuml;bernehmen</button><br>
          <?php echo "<textarea style='width:900px;' rows=7 name=dsc[] class='artikelbeschreibung'>$pos1dsc</textarea>"; ?>
        </td>
        <td valign=top style="width:100px;"> <?php echo "<input type=text class='ep' name='ep[]' value='$pos1ep' size='4' />"; ?> </td>
        <td valign=top style="width:100px;"><input type=text class="poserab" name="poserab[]" value="0" size="4" /></td>
        <td valign=top style="width:100px;"><input type=text class="posprab" name="posprab[]" value="1" size="4" /></td>
        <td valign=top><input style="color:red;" type=button class="del" name="del[]" value=" X " /></td>
      </tr>

    </tbody>
  </table>
</div>

<input type="button" class="button2" name="newpos" style="float:right; clear:both;margin-right:25px;" value="Position erstellen">

<br><br><br><br><br>

<div class="column70">
  <div class="column50">
    <?php echo "<textarea name='zahlungsbedingungen' id='zahlungsbedingungen' rows='10' cols='30' placeholder='Zahlungsbedingungen'>$zahlungsbedingungen</textarea>"; ?>
  </div>

  <div class="column50">
    <select name="gesamtrabatt" id="gesamtrabatt">
      <option value="Rabatt">Rabatt</option>
      <option value="Nachlass">Nachlass</option>
    </select>

    <div id="rabatt">
      <div class="column1">Gesamtrabatt &euro;<input type=text class="geserab" name="geserab" value="0" size="4"></div>
      <div class="column1">Gesamtrabatt %<input type=text class="gesprab" name="gesprab" value="1" size="4"></div>
    </div>
  </div>
  <input class="button" type="submit" name="angebot-bearbeiten" value="Angebot speichern">

</div>

<div class="column30">
  <div style="width:100%;border: #4B9F93 1px solid;border-bottom:2px solid #F39200;"><br>
    <label>&nbsp;Summe Netto:</label><input type="text" name="netto" id="netto" value="" readonly="" style="border:none;background-color:transparent;width:60%;text-align:left;" tabindex="32000"><br>
    <label>&nbsp;Rabatt / Nachlass:</label><input type="text" name="gr" id="gr" value="" readonly="" style="border:none;background-color:transparent;width:60%;text-align:left;" tabindex="32000"><br>
    <label>&nbsp;Summe Netto nach Abzug:</label><input type="text" name="nettoabzug" id="nettoabzug" value="" readonly="" style="border:none;background-color:transparent;width:60%;text-align:left;" tabindex="32000"><br>
    <label>&nbsp;MwSt <?php echo $steuersatz; ?>%:</label><input type="text" name="mwst" id="steuer" value="" readonly="" style="border:none;background-color:transparent;width:60%;text-align:left;" tabindex="32000"><br>
    <label style="font-weight:bold;">&nbsp;Gesamt Brutto:</label><input type="text" name="brutto" id="brutto" value="" readonly="" style="border:none;background-color:transparent;width:60%;text-align:left;font-weight:bold;" tabindex="32000">
  </div>
</div>

</form>
&nbsp;

</section>
<?php
include '../../inc/footer.php';
?>

</body>
</html>