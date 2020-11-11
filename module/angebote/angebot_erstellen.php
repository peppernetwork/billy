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
	$pos1anz = $_POST['anz'][0];
	$pos1einheit = $_POST['einheit'][0];
	$pos1dsc = $_POST['dsc'][0];
	$pos1ep = $_POST['ep'][0];
	$pos2anz = $_POST['anz'][1];
	$pos2einheit = $_POST['einheit'][1];
	$pos2dsc = $_POST['dsc'][1];
	$pos2ep = $_POST['ep'][1];

    // 3. String für SQL-Anweisung erstellen
	$insertString = "INSERT INTO angebote (kunde, anrede, datum, referenz, zahlungsbedingungen, pos1anz, pos1einheit, pos1dsc, pos1ep, pos2anz, pos2einheit, pos2dsc, pos2ep)
	VALUES ('$kunde', '$anrede', '$datum', '$referenz', '$zahlungsbedingungen', '$pos1anz', '$pos1einheit', '$pos1dsc', '$pos1ep', '$pos2anz', '$pos2einheit', '$pos2dsc', '$pos2ep');";

    // SQL-Anweisung durchfuehren
    $check = mysqli_query($connect, $insertString);

    if($check) {
        echo '<span style="color: green;" /><strong>Angebot erfolgreich erstellt</strong></span>';
    }}
?>

<h1>Angebot erstellen</h1>

  <div class="row">
	<div class="column3">

<?php

// Kundenauswahl Verarbeitung
    // 1. Verbindung zur Datenbank herstellen
	include '../../inc/connect.php';

    // 2. PrÃ¼fe Radio-Button-Auswahl
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
	echo"<form action='angebot_erstellen.php' method='post'>";
	echo "<input name='id' type='hidden' value='$id'>";
	echo "<textarea name='kunde' rows='10' cols='30'>$firma\n$vorname $nachname\n$strasse\n$plz $ort</textarea>";

?>

	</div>

	<div class="column3">
		<textarea name="anrede" id="anrede" rows="10" cols="30" placeholder="Anrede"/></textarea>
	</div>

	<div class="column3">
		<input type="date" name="datum" value="<?php echo date('Y-m-d'); ?>"/>
		<input type="text" name="angebotid" placeholder="Angebotsnummer (wird automatisch vergeben)"/>
		<input type="text" name="referenz" placeholder="Referenz"/>
	</div>
  </div>

<br><br>

<!-- Hier beginnt die Angebotsbearbeitung für Positionen -->

<!-- Positionen -->
<div id="docpos">
<table class="plist" style="font-size:10px;">
<tbody><tr>
<th style="width:101px;">Menge</th>
<th style="width:101px;border-left:1px solid grey;">Einheit</th>
<th style="width:900px;border-left:1px solid grey;">Beschreibung</th>
<th style="width:60px;border-left:1px solid grey;">EP netto</th>
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
</div>

<div class="column3">
	<!-- Kalkulation -->
<div style="float:right;text-align:left;width:200px;margin-right:20px;border: #4B9F93 1px solid;border-bottom:2px solid #F39200;margin-bottom:10px;"><br>
	<label>&nbsp;Summe Netto:</label><input type="text" id="netto" value="" readonly="" style="border:none;background-color:transparent;width:150px;text-align:right;" tabindex="32000"><br>
	<label>&nbsp;MwSt 19,00%:</label><input type="text" id="steuer" value="" readonly="" style="border:none;background-color:transparent;width:150px;text-align:right;" tabindex="32000"><br>
	<label style="font-weight:bold;">&nbsp;Gesamt Brutto:</label><input type="text" id="brutto" value="" readonly="" style="border:none;background-color:transparent;width:150px;text-align:right;font-weight:bold;" tabindex="32000">
</div>

<!-- Kalkulation Auswahl 
<div style="display:inline-block;">
	<input type="checkbox" value="1" name="sum" id="sum"><label for="sum" style="text-align:left">Gesamtsumme</label><br>
	<input type="checkbox" value="1" name="mwst" id="mwst"><label for="mwst" style="text-align:left">MwSt &amp; Brutto</label><br>
</div>
-->
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
