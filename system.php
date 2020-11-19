<?php
include 'inc/header.php';
include 'inc/nav.php';
?>

<section>

<?php
    if(isset($_POST["systemeinstellungen-speichern"])){

//Datenbank-Verbindung herstellen
include 'inc/connect.php';

    //Nutzereingabe in Variablen speichern
	$mwst = $_POST["mwst"];

    // String für SQL-Anweisung erstellen
    $insertString = "INSERT INTO einstellungen (mwst)
 VALUES ('$mwst');";

    // SQL-Anweisung durchfuehren
    $check = mysqli_query($connect, $insertString);

    if($check) {
        echo '<span style="color: green;" /><strong>Systemwert erfolgreich angelegt</strong></span>';
    }}
?>

<h1>Neuen System Wert anlegen</h1>
<form action="system.php" method="post">
    <fieldset>
	<legend><h2>Systemwert</h2></legend>
	<input name="mwst" type="text"> MwSt. Satz<br /><br />
	</fieldset>
<br />

<table style="width:100%;">
  <tr>
    <td><input type="submit" name="systemeinstellungen-speichern" value="Systemeinstellungen speichern"></td>
    <td><input type="reset" class="button1" value="Eingaben l&ouml;schen"></td>
  </tr>
</table>
</form>
</section>

<?php
include 'inc/footer.php';
?>

</body>
</html>