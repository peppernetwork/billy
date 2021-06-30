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


<section>

<h1>Bausteine bearbeiten</h1>

<?php

// 1. Verbindung zur Datenbank herstellen
include '../../inc/connect.php';

// 2. Pr�fe Radio-Button-Auswahl
if(isset($_GET["auswahl"])){

    // 3. Datenbankabfrage starten
    $bausteinid = $_GET["auswahl"];
    $abfrage = "SELECT * FROM bausteine WHERE bausteinid = $bausteinid";
    $result = mysqli_query($connect, $abfrage);

    // 4. Datensatz in Variablen speichern
	$dsatz = mysqli_fetch_assoc($result);
	$bausteinname = $dsatz["bausteinname"];
	$bausteinbeschreibung = $dsatz["bausteinbeschreibung"];

    // 5. Das Bearbeiten-Formular anzeigen
	echo "<form action='baustein-bearbeiten.php' method='post'>";
	echo "<input name='bausteineid' type='hidden' value='$bausteinid'>";
	echo "<p><input type='text' name='bausteinname' value='$bausteinname'> Bausteinname</p>";
	echo "<p><textarea name='bausteinbeschreibung'>$bausteinbeschreibung</textarea> Bausteinbeschreibung</p>";
	echo "<br><br><input name='bearbeitungAbschicken' class='button1' value='Speichern' type='submit'>";
	echo "</form>";

}

//6. Datensatz aktualisieren mit UPDATE
if(isset($_POST["bearbeitungAbschicken"])){
	$bausteinid = $_POST["bausteineid"];
	$bausteinname = $_POST["bausteinname"];
	$bausteinbeschreibung = $_POST["bausteinbeschreibung"];

//String für Update-Anweisung erstellen
$update = "UPDATE bausteine SET
bausteinname ='$bausteinname',
bausteinbeschreibung ='$bausteinbeschreibung'
WHERE bausteinid = $bausteinid";

//MySQL-Anweisung ausfÃ¼hren
    mysqli_query($connect, $update);

    echo "Baustein bearbeitet.<br><br>";
    echo "<a href='bausteine-anzeigen.php'>Zur&uuml;ck zur Baustein&uuml;bersicht</a>";
}

?>

</section>

<?php
include '../../inc/footer.php';
?>

</body>
</html>