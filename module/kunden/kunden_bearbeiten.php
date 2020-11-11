<?php
include '../../inc/header.php';
include '../../inc/nav.php';
?>

<section>

<h1>Kundendaten bearbeiten</h1>

<?php

// 1. Verbindung zur Datenbank herstellen
include '../../inc/connect.php';

// 2. Pr�fe Radio-Button-Auswahl
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
	$tel = $dsatz["tel"];
	$fax = $dsatz["fax"];	
	$mobil = $dsatz["mobil"];
	$email = $dsatz["email"];
	$ust = $dsatz["ust"];
	$steuernr = $dsatz["steuernr"];

    // 5. Das Bearbeiten-Formular anzeigen
	echo "<form action='kunden_bearbeiten.php' method='post'>";
	echo "<input name='id' type='hidden' value='$id'>";
	echo "<p><input type='text' name='firma' value='$firma'> Firma</p>";
	echo "<p><input type='text' name='anrede' value='$anrede'> Anrede</p>";
	echo "<p><input type='text' name='vorname' value='$vorname'> Vorname</p>";
	echo "<p><input type='text' name='nachname' value='$nachname'> Nachname</p>";
	echo "<p><input type='text' name='strasse' value='$strasse'> Stra&szlig;e</p>";
	echo "<p><input type='text' name='plz' value='$plz'> PLZ</p>";
	echo "<p><input type='text' name='ort' value='$ort'> Ort</p>";
	echo "<p><input type='text' name='tel' value='$tel'> Telefon</p>";
	echo "<p><input type='text' name='fax' value='$fax'> Fax-Nummer</p>";
	echo "<p><input type='text' name='mobil' value='$mobil'> Mobilnummer</p>";
	echo "<p><input type='text' name='email' value='$email'> E-Mail Adresse</p>";
	echo "<p><input type='text' name='ust' value='$ust'> UST-ID</p>";
	echo "<p><input type='text' name='steuernr' value='$steuernr'> Steuernummer</p>";
	echo "<br><br><input name='bearbeitungAbschicken' class='button1' value='Speichern' type='submit'>";
	echo "</form>";

}

//6. Datensatz aktualisieren mit UPDATE
if(isset($_POST["bearbeitungAbschicken"])){
	$id = $_POST["id"];
	$firma = $_POST["firma"];
	$anrede = $_POST["anrede"];
	$vorname = $_POST["vorname"];
	$nachname = $_POST["nachname"];
	$strasse = $_POST["strasse"];
	$plz = $_POST["plz"];
	$ort = $_POST["ort"];
	$tel = $_POST["tel"];
	$fax = $_POST["fax"];
	$mobil = $_POST["mobil"];
	$email = $_POST["email"];
	$ust = $_POST["ust"];
	$steuernr = $_POST["steuernr"];

//String für Update-Anweisung erstellen
$update = "UPDATE kunden SET
firma ='$firma',
anrede ='$anrede',
vorname ='$vorname',
nachname ='$nachname',
strasse ='$strasse',
plz ='$plz',
ort ='$ort',
tel ='$tel',
fax ='$fax',
mobil ='$mobil',
email ='$email',
ust ='$ust',
steuernr ='$steuernr'
WHERE id = $id";

//MySQL-Anweisung ausfÃ¼hren
    mysqli_query($connect, $update);

    echo "Kundendaten bearbeitet.<br><br>";
    echo "<a href='kunden_anzeigen.php'>Zur&uuml;ck zur Kunden&uuml;bersicht</a>";
}

?>

</section>

<?php
include '../../inc/footer.php';
?>

</body>
</html>