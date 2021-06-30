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

<h1>Artikel bearbeiten</h1>

<?php

// 1. Verbindung zur Datenbank herstellen
include '../../inc/connect.php';

// 2. Pr�fe Radio-Button-Auswahl
if(isset($_GET["auswahl"])){

    // 3. Datenbankabfrage starten
    $artikelid = $_GET["auswahl"];
    $abfrage = "SELECT * FROM artikel WHERE artikelid = $artikelid";
    $result = mysqli_query($connect, $abfrage);

    // 4. Datensatz in Variablen speichern
	$dsatz = mysqli_fetch_assoc($result);
	$artikelname = $dsatz["artikelname"];
	$artikelbeschreibung = $dsatz["artikelbeschreibung"];

    // 5. Das Bearbeiten-Formular anzeigen
	echo "<form action='artikel-bearbeiten.php' method='post'>";
	echo "<input name='artikelid' type='hidden' value='$artikelid'>";
	echo "<p><input type='text' name='artikelname' value='$artikelname'> Artikelname</p>";
	echo "<p><textarea name='artikelbeschreibung'>$artikelbeschreibung</textarea> Artikelbeschreibung</p>";
	echo "<br><br><input name='bearbeitungAbschicken' class='button1' value='Speichern' type='submit'>";
	echo "</form>";

}

//6. Datensatz aktualisieren mit UPDATE
if(isset($_POST["bearbeitungAbschicken"])){
	$artikelid = $_POST["artikelid"];
	$artikelname = $_POST["artikelname"];
	$artikelbeschreibung = $_POST["artikelbeschreibung"];

//String für Update-Anweisung erstellen
$update = "UPDATE artikel SET
artikelname ='$artikelname',
artikelbeschreibung ='$artikelbeschreibung'
WHERE artikelid = $artikelid";

//MySQL-Anweisung ausfÃ¼hren
    mysqli_query($connect, $update);

    echo "Kundendaten bearbeitet.<br><br>";
    echo "<a href='artikel-anzeigen.php'>Zur&uuml;ck zur Artikel&uuml;bersicht</a>";
}

?>

</section>

<?php
include '../../inc/footer.php';
?>

</body>
</html>