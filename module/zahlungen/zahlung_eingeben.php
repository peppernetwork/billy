<?php
include '../../inc/header.php';
include '../../inc/nav.php';
?>

<section>

<?php

// 1. Verbindung zur Datenbank herstellen
include '../../inc/connect.php';

// 2. Prüfe Radio-Button-Auswahl
if(isset($_GET["auswahl"])){

    // 3. Datenbankabfrage starten
    $id = $_GET["auswahl"];
    $abfrage = "SELECT * FROM rechnungen WHERE rechnungid = $id";
    $result = mysqli_query($connect, $abfrage);

    // 4. Datensatz in Variablen speichern
	$dsatz = mysqli_fetch_assoc($result);
	$brutto = $dsatz["brutto"];
	$gezahlt = $dsatz["gezahlt"];

    // 5. Berechnung fuer das Feld offen
        $number1 = number_format($brutto, 2, ',', '.');
        $number2 = number_format($gezahlt, 2, ',', '.');
        $nochzuzahlen = number_format($number1 - $number2, 2, ',', '.');


    // 5. Das Bearbeiten-Formular anzeigen
	echo "<div class='column3'>";
	echo "<form action='zahlung_eingeben.php' method='post'>";
	echo "<input name='id' type='hidden' value='$id'>";
	echo "<p><input type='text' disabled name='gezahlt' value='$gezahlt' /> Gezahlt<p>";
	echo "<p><input type='text' disabled name='offen' value='$nochzuzahlen' /> Offen<p>";
	echo "<p><input type='text' name='gezahlt' value=''> Zahlung eingeben</p>";
	echo "<br><br><input name='systemeinstellungen-speichern' class='button1' value='Speichern' type='submit'>";
	echo "</form>";
	echo "</div>";

}

//6. Datensatz aktualisieren mit UPDATE
if(isset($_POST["systemeinstellungen-speichern"])){
	$id = $_POST["id"];

	$gezahlt = $_POST["gezahlt"];

//String für Update-Anweisung erstellen
$update = "UPDATE rechnungen SET
offen ='offen',
gezahlt ='$gezahlt'
WHERE rechnungid = $id";

//MySQL-Anweisung ausführen
    mysqli_query($connect, $update);

    echo "Zahlung gespeichert.<br><br>";
    echo "<a href='javascript:history.back()'>Zur&uuml;ck</a>";
}

?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>








 <?php
if ($brutto < $gezahlt) {
  echo "Have a good day!";
}
?> 
























</section>

<?php
include 'inc/footer.php';
?>

</body>
</html>
