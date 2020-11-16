<?php
include '../../inc/header.php';
include '../../inc/nav.php';
?>

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

<h1>Angebot erstellen</h1>

<?php
    if(isset($_POST["angebot-erstellen"])){

//Datenbank-Verbindung herstellen
include '../../inc/connect.php';

    //Nutzereingabe in Variablen speichern
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

// Hier wird der Kunde ausgegeben

  // Kundenauswahl Verarbeitung
    // 1. Verbindung zur Datenbank herstellen
	include '../../inc/connect.php';

    // 2. Prüfe Radio-Button-Auswahl
	if(isset($_GET["auswahl"])){

    // 3. Datenbankabfrage starten
    $id = $_GET["auswahl"];
    $abfrage = "SELECT * FROM kunden WHERE id = $id";
    $result = mysqli_query($connect, $abfrage);

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
	echo "<form action='angebot_erstellen.php' method='post'>";
	echo "<div class='column3'>";
	echo "<input name='id' type='hidden' value='$id'>";
	echo "<textarea name='kunde' rows='10' cols='30'>$firma\n$vorname $nachname\n$strasse\n$plz $ort</textarea>";
	echo "</div>";
?>
	
	<div class="column3">
		<textarea name="anrede" id="anrede" rows="10" cols="30" placeholder="Anrede"/></textarea>
	</div>
	<div class="column3">
		<input type="date" name="datum" value="<?php echo date('Y-m-d'); ?>"/>
		<input type="text" disabled name="angebotid" placeholder="Angebotsnummer (wird automatisch vergeben)"/>
		<input type="text" name="referenz" placeholder="Referenz"/>
	</div>

<!-- Hier beginnt die Angebotsbearbeitung fŸr Positionen -->
<!-- Positionen -->
<div id="docpos">
	<table class="plist" style="font-size:10px;">
	<tbody><tr>
	<th style="width:100px;">Menge</th>
	<th style="width:100px;border-left:1px solid grey;">Einheit</th>
	<th style="width:900px;border-left:1px solid grey;">Beschreibung</th>
	<th style="width:100px;border-left:1px solid grey;">EP Netto</th>
	<th style="width:100px;border-left:1px solid grey;">Pos. Rabatt &euro;</th>
	<th style="width:100px;border-left:1px solid grey;">Pos. Rabatt %</th>
	<th>&nbsp;</th>
	</tr>
</tbody></table></div>

<input type="button" class="button2" name="newpos" style="float:right; clear:both;margin-right:25px;" value="Position erstellen" onclick="insertPos()">

<br><br><br><br><br>

<!-- Zahlungsbedingungen -->
<div class="column3">
	<textarea name="zahlungsbedingungen" id="zahlungsbedingungen" rows="10" cols="30" placeholder="Zahlungsbedingungen"></textarea>
</div>

<div class="column3">
  <select name="gesamtrabatt" id="gesamtrabatt">
    <option value="volvo">Rabatt</option>
    <option value="saab">Nachlass</option>
  </select>

<div id="rabatt"></div>
<script> document.getElementById("rabatt").innerHTML = Rabatt(); </script>

</div>
</div>

<!-- Kalkulation -->
<div class="column3">
	<div style="float:right;text-align:left;width:200px;margin-right:20px;border: #4B9F93 1px solid;border-bottom:2px solid #F39200;margin-bottom:10px;"><br>
		<label>&nbsp;Rabatt:</label><input type="text" name="gr" id="gr" value="" readonly="" style="border:none;background-color:transparent;width:150px;text-align:right;" tabindex="32000"><br>
		<label>&nbsp;Summe Netto:</label><input type="text" name="netto" id="netto" value="" readonly="" style="border:none;background-color:transparent;width:150px;text-align:right;" tabindex="32000"><br>
		<label>&nbsp;MwSt 19,00%:</label><input type="text" name="mwst" id="steuer" value="" readonly="" style="border:none;background-color:transparent;width:150px;text-align:right;" tabindex="32000"><br>
		<label style="font-weight:bold;">&nbsp;Gesamt Brutto:</label><input type="text" name="brutto" id="brutto" value="" readonly="" style="border:none;background-color:transparent;width:150px;text-align:right;font-weight:bold;" tabindex="32000">
	</div>
</div>
<br><br>

<input class="button" type="submit" name="angebot-erstellen" value="Angebot erstellen">
</form>

</section>

<?php
include '../../inc/footer.php';
?>

</body>
</html>
