<?php
include '../../inc/header.php';
include '../../inc/nav.php';
?>

<section>

<?php
    if(isset($_POST["kunde-anlegen"])){

//Datenbank-Verbindung herstellen
include '../../inc/connect.php';

    //Nutzereingabe in Variablen speichern
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

    // String für SQL-Anweisung erstellen
    $insertString = "INSERT INTO kunden (firma, anrede, vorname, nachname, strasse, plz, ort, tel, fax, mobil, email, ust, steuernr)
 VALUES ('$firma', '$anrede', '$vorname', '$nachname', '$strasse', '$plz', '$ort', '$tel', '$fax', '$mobil', '$email', '$ust', '$steuernr');";

    // SQL-Anweisung durchfuehren
    $check = mysqli_query($connect, $insertString);

    if($check) {
        echo '<span style="color: green;" /><strong>Kunde erfolgreich angelegt</strong></span>';
    }}
?>

<h1>Neuen Kunden anlegen</h1>
<form action="kunden_hinzufuegen.php" method="post">
    <fieldset>
	<legend><h2>Pers&ouml;nliche Informationen</h2></legend>
	<input name="firma" type="text"> Firma<br /><br />
	<select name="anrede">
	<option value="Herr">Herr</option>
	<option value="Frau">Frau</option>
	</select> Anrede<br /><br />
	<input name="vorname" type="text"> Vorname<br /><br />
	<input name="nachname" type="text"> Nachname<br /><br />
	</fieldset>

	<fieldset>
	<legend><h2>Adresse</h2></legend>
	<input name="strasse" type="text"> Stra&szlig;e<br /><br />
	<input name="plz" type="text"> PLZ<br /><br />
	<input name="ort" type="text"> Ort<br /><br />
	</fieldset>

	<fieldset>
	<legend><h2>Kontaktinformationen</h2></legend>
	<input name="tel" type="text"> Telefonnummer<br /><br />
	<input name="fax" type="text"> Fax-Nummer<br /><br />
	<input name="mobil" type="text"> Mobilnummer<br /><br />
	<input name="email" type="text"> E-Mail Adresse<br /><br />
	</fieldset>

	<fieldset>
	<legend><h2>Kontaktinformationen</h2></legend>
	<input name="ust" type="text"> UST-ID<br /><br />
	<input name="steuernr" type="text"> Steuernummer<br /><br />
	</fieldset>
<br />

<table style="width:100%;">
  <tr>
    <td><input type="submit" name="kunde-anlegen" value="Kunde anlegen"></td>
    <td><input type="reset" class="button1" value="Eingaben l&ouml;schen"></td>
  </tr>
</table>
</form>
</section>

<?php
include '../../inc/footer.php';
?>

</body>
</html>