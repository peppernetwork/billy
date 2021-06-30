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

<?php
    if(isset($_POST["baustein-speichern"])){

//Datenbank-Verbindung herstellen
include '../../inc/connect.php';

    //Nutzereingabe in Variablen speichern
	$bausteinname = $_POST["bausteinname"];
	$bausteinbeschreibung = $_POST["bausteinbeschreibung"];

    // String für SQL-Anweisung erstellen
    $insertString = "INSERT INTO bausteine (bausteinname, bausteinbeschreibung)
    VALUES ('$bausteinname', '$bausteinbeschreibung');";

    // SQL-Anweisung durchfuehren
    $check = mysqli_query($connect, $insertString);

    if($check) {
        echo '<span style="color: green;" /><strong>Baustein erfolgreich angelegt</strong></span>';
    }}
?>

<h1>Neuen Baustein anlegen</h1>
<form action="baustein-hinzufuegen.php" method="post">
    <fieldset>
	<legend><h2>Bausteininformationen</h2></legend>
	<input name="bausteinname" type="text"> Bausteinname<br /><br />
	<textarea rows='10' cols='30' name="bausteinbeschreibung"></textarea> Bausteinbeschreibung<br /><br />
	</fieldset>
<br />

<table style="width:100%;">
  <tr>
    <td><input type="submit" name="baustein-speichern" value="Baustein speichern"></td>
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