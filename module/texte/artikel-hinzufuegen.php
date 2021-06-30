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
    if(isset($_POST["artikel-speichern"])){

//Datenbank-Verbindung herstellen
include '../../inc/connect.php';

    //Nutzereingabe in Variablen speichern
	$artikelname = $_POST["artikelname"];
	$artikelbeschreibung = $_POST["artikelbeschreibung"];

    // String für SQL-Anweisung erstellen
    $insertString = "INSERT INTO artikel (artikelname, artikelbeschreibung)
    VALUES ('$artikelname', '$artikelbeschreibung');";

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
	<textarea rows='10' cols='30' name="artikelbeschreibung"></textarea> Artikelbeschreibung<br /><br />
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