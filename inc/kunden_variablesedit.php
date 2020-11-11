<?php
	echo "<form action='kunden_bearbeiten.php' method='post'>";
	echo "<p><input name='anrede' value='$anrede'> Anrede</p>";
	echo "<p><input name='name' value='$name'> Name</p>";
	echo "<p><input name='zhd' value='$zhd'> z.Hd. Ansprechpartner</p>";
	echo "<p><input name='strasse' value='$strasse'> Stra&szlig;e</p>";
	echo "<p><input name='plz' value='$plz'> PLZ</p>";
	echo "<p><input name='ort' value='$ort'> Ort</p>";
	echo "<p><input name='tel' value='$tel'> Telefon</p>";
	echo "<p><input name='fax' value='$fax'> Fax-Nummer</p>";
	echo "<p><input name='mobil' value='$mobil'> Mobilnummer</p>";
	echo "<p><input name='email' value='$email'> E-Mail Adresse</p>";
	echo "<p><input name='ust' value='$ust'> UST-ID</p>";
	echo "<p><input name='steuernr' value='$steuernr'> Steuernummer</p>";
	echo "<br><br><input name='bearbeitungAbschicken' class='button1' value='Speichern' type='submit'>";
	echo "</form>";
?>
