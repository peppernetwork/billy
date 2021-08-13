<?php
    if(isset($_POST["rechnung-erstellen"])){

//Datenbank-Verbindung herstellen
include '../../inc/connect.php';

    //Nutzereingabe aus Rechnungsposition in Variablen speichern
	$kunde = $_POST["kunde"];
	$anrede = $_POST["anrede"];
	$datum = $_POST["datum"];
	$referenz = $_POST["referenz"];
	$zahlungsbedingungen = $_POST["zahlungsbedingungen"];
	$geserab = $_POST["geserab"];
	$gesprab = $_POST["gesprab"];
	$netto = $_POST["netto"];
	$mwst = $_POST["mwst"];
	$brutto = $_POST["brutto"];
	$pos1 = $_POST["pos"][0];
	$pos1anz = $_POST['anz'][0];
	$pos1einheit = $_POST['einheit'][0];
	$pos1dsc = $_POST['dsc'][0];
	$pos1ep = $_POST['ep'][0];
	$pos1erab = $_POST['poserab'][0];
	$pos1prab = $_POST['posprab'][0];
	$pos2 = $_POST["pos"][1];
	$pos2anz = $_POST['anz'][1];
	$pos2einheit = $_POST['einheit'][1];
	$pos2dsc = $_POST['dsc'][1];
	$pos2ep = $_POST['ep'][1];
	$pos2erab = $_POST['poserab'][1];
	$pos2prab = $_POST['posprab'][1];

    // 3. String fuer SQL-Anweisung erstellen
	$insertString = "INSERT INTO rechnungen (kunde, anrede, datum, referenz, zahlungsbedingungen, geserab, gesprab, netto, mwst, brutto, pos1, pos1anz, pos1einheit, pos1dsc, pos1ep, pos1erab, pos1prab, pos2, pos2anz, pos2einheit, pos2dsc, pos2ep, pos2erab, pos2prab)
	VALUES ('$kunde', '$anrede', '$datum', '$referenz', '$zahlungsbedingungen', '$geserab', '$gesprab', '$netto', '$mwst', '$brutto', '$pos1', '$pos1anz', '$pos1einheit', '$pos1dsc', '$pos1ep', '$pos1erab', '$pos1prab', '$pos2', '$pos2anz', '$pos2einheit', '$pos2dsc', '$pos2ep', '$pos2erab', '$pos2prab');";

    // SQL-Anweisung durchfuehren
    $check = mysqli_query($connect, $insertString);

    if($check) {
        $insertId = mysqli_insert_id($connect);
        header('Location: rechnung_bearbeiten.php?auswahl=' . $insertId . '&created=true');
    } else {
        echo '<span style="color: red;" /><strong>Fehler beim Erstellen</strong></span>';
    }
  }

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

<h1>Rechnung erstellen</h1>

<?php
// Hier wird der Kunde ausgegeben, welcher zuvor ausgewählt wurde.

  // Kundenauswahl Verarbeitung
    // 1. Verbindung zur Datenbank herstellen
	include '../../inc/connect.php';

    // 2. Pruefe Radio-Button-Auswahl
	if(isset($_GET["auswahl"])){

    // 3. Datenbankabfrage starten
	$id = $_GET["auswahl"];
	$abfrage = "SELECT * FROM kunden WHERE id = $id";
	$result = mysqli_query($connect, $abfrage);

    // 4. Datensatz in Variablen speichern
	$dsatz = mysqli_fetch_assoc($result);
	$firma = $dsatz["firma"];
	$anrede = $dsatz["anrede"];
	$vorname = $dsatz["vorname"];
	$nachname = $dsatz["nachname"];
	$strasse = $dsatz["strasse"];
	$plz = $dsatz["plz"];
	$ort = $dsatz["ort"];
}		

    // 5. Das Bearbeiten-Formular anzeigen
	echo "<form action='rechnung_erstellen.php' method='post'>";
	echo "<div class='column3'>";
	echo "<input name='id' type='hidden' value='$id'>";
	echo "<textarea name='kunde' rows='10' cols='30'>$firma\n$vorname $nachname\n$strasse\n$plz $ort</textarea>";
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
  <textarea name="anrede" id="anrede" rows="10" cols="30" placeholder="Anrede" /></textarea>
</div>
<div class="column3">
  <input type="date" name="datum" value="<?php echo date('Y-m-d'); ?>" />
  <input type="text" disabled name="rechnungid" placeholder="Rechnungsnummer (wird automatisch vergeben)" />
  <input type="text" name="referenz" placeholder="Referenz" />
</div>

<!-- Hier beginnt die Rechnungsbearbeitung für Positionen -->
<!-- Positionen -->
<div>
  <table class="plist" style="font-size:10px;">
    <thead>
      <tr>
	    <th style="width:100px;">Pos.</th>
        <th style="width:100px;border-left:1px solid grey;">Menge</th>
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
	  	<td valign=top style="width:100px;"><input type=text class="pos" name="pos[]" value="1" size="4" /></td>
        <td valign=top style="width:100px;"><input type=text class="anz" name="anz[]" value="1" size="4" /></td>
        <td valign=top style="width:100px;">
          <select name="einheit[]">
            <option value="Lfm.">Lfm.</option>
            <option value="Pal.">Pal.</option>
            <option value="pschl.">pschl.</option>
            <option value="Pkg.">Pkg.</option>
            <option value="Std.">Std.</option>
            <option value="Stk.">Stk.</option>
          </select>
        </td>
        <td valign=top><input type="text" list="artikelliste" name="artikelsuche" id="artikelsuche" autocomplete="off" placeholder="Artikelsuche" style="width:700px;"><button type="button" class="button3" style="width:185px;">Artikel &uuml;bernehmen</button><br>
          <textarea style="width:900px;" rows=7 name=dsc[] class="artikelbeschreibung"></textarea>
        </td>
        <td valign=top style="width:100px;"><input type=text class="ep" name="ep[]" value="" size="4" /></td>
        <td valign=top style="width:100px;"><input type=text class="poserab" name="poserab[]" value="0" size="4" /></td>
        <td valign=top style="width:100px;"><input type=text class="posprab" name="posprab[]" value="1" size="4" /></td>
        <td valign=top><input style="color:red;" type=button class="del" name="del[]" value=" X " /></td>
      </tr>

    </tbody>
  </table>
</div>

<input type="button" class="button2" name="newpos" style="float:right; clear:both;margin-right:25px;" value="Position erstellen">

<br><br><br><br><br>

<!-- Untere Eingabemaske -->

<div class="column70">
  <div class="column50">
    <textarea name="zahlungsbedingungen" id="zahlungsbedingungen" rows="10" cols="30" placeholder="Zahlungsbedingungen"></textarea>
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
  <input class="button" type="submit" name="rechnung-erstellen" value="Rechnung erstellen">

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