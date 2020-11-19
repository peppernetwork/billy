<?php
include 'inc/header.php';
include 'inc/nav.php';
?>

<section>

<?php

// 1. Verbindung zur Datenbank herstellen
include 'inc/connect.php';

// 2. Prüfe Radio-Button-Auswahl
if(isset($_GET["auswahl"])){

    // 3. Datenbankabfrage starten
    $id = $_GET["auswahl"];
    $abfrage = "SELECT * FROM einstellungen WHERE id = $id";
    $result = mysqli_query($connect, $abfrage);

    // 4. Datensatz in Variablen speichern
	$dsatz = mysqli_fetch_assoc($result);
	$mwst = $dsatz["mwst"];

    // 5. Das Bearbeiten-Formular anzeigen
	echo "<div class='column3'>";
	echo "<form action='systemsettings.php' method='post'>";
	echo "<input name='id' type='hidden' value='$id'>";
	echo "<input name='id' type='hidden' value='$id'>";
	echo "<p><input type='text' name='mwst' value='$mwst'> MwSt. Satz</p>";
	echo "<br><br><input name='systemeinstellungen-speichern' class='button1' value='Speichern' type='submit'>";
	echo "</form>";
	echo "</div>";

}

//6. Datensatz aktualisieren mit UPDATE
if(isset($_POST["systemeinstellungen-speichern"])){
	$id = $_POST["id"];
	$mwst = $_POST["mwst"];

//String für Update-Anweisung erstellen
$update = "UPDATE einstellungen SET
mwst ='$mwst'
WHERE id = $id";

//MySQL-Anweisung ausführen
    mysqli_query($connect, $update);

    echo "Systemeinstellungen gespeichert.<br><br>";
    echo "<a href='javascript:history.back()'>Zur&uuml;ck</a>";
}

?>

</section>

<?php
include 'inc/footer.php';
?>

</body>
</html>