<?php
include '../../inc/header.php';
include '../../inc/nav.php';
?>

<section>

<?php
    if(isset($_POST["artikel-speichern"])){

//Datenbank-Verbindung herstellen
include '../../inc/connect.php';

    //Nutzereingabe in Variablen speichern
	$artikelname = $_POST["artikelname"];

    // String für SQL-Anweisung erstellen
    $insertString = "INSERT INTO artikel (artikelname)
    VALUES ('$artikelname');";

    // SQL-Anweisung durchfuehren
    $check = mysqli_query($connect, $insertString);

    if($check) {
        echo '<span style="color: green;" /><strong>Artikel erfolgreich angelegt</strong></span>';
    }}
?>

<h1>Neuen Artikel anlegen</h1>
<form action="artikel-hinzufuegen.php" method="post">
    <fieldset>
	<legend><h2>Artikelinformationen</h2></legend>
	<input name="artikelname" type="text"> Artikelname<br /><br />
	</fieldset>
<br />

<table style="width:100%;">
  <tr>
    <td><input type="submit" name="artikel-speichern" value="Artikel speichern"></td>
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