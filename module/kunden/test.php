<?php
include '../../inc/header.php';
include '../../inc/nav.php';
?>

<section>

<h1>Angeboote bearbeiten</h1>

<?php

// 1. Verbindung zur Datenbank herstellen
include '../../inc/connect.php';

// 2. Prüfe Radio-Button-Auswahl
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
	echo "<form action='test.php' method='post'>";
	echo "<input name='id' type='hidden' value='$id'>";
	echo "<p><input type='text' name='pups' value='$anrede'> Anrede</p>";
	echo "<br><br><input name='bearbeitungAbschicken' class='button1' value='Speichern' type='submit'>";
	echo "</form>";
}

//6. Datensatz aktualisieren mit UPDATE
if(isset($_POST["bearbeitungAbschicken"])){
	$id = $_POST["id"];
	$anrede = $_POST["pups"];

//String fuer Update-Anweisung erstellen
$update = "UPDATE kunden SET
anrede ='$anrede'
WHERE id = $id";

//MySQL-Anweisung ausführen
    mysqli_query($connect, $update);

    echo "Kundendaten bearbeitet.<br><br>";
    echo "<a href='test.php?auswahl=1'>Zur&uuml;ck zur Kunden&uuml;bersicht</a>";
}

?>

</section>

<?php
include '../../inc/footer.php';
?>

</body>
</html>