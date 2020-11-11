<?php
	//Ab hier wird aus der Datenbank ausgelesen
	$dsatz = mysqli_fetch_assoc($result);
	$anrede = $dsatz["anrede"];
	$name = $dsatz["name"];
	$zhd = $dsatz["zhd"];
	$strasse = $dsatz["strasse"];
	$plz = $dsatz["plz"];
	$ort = $dsatz["ort"];
	$tel = $dsatz["tel"];
	$fax = $dsatz["fax"];	
	$mobil = $dsatz["mobil"];
	$email = $dsatz["email"];
	$ust = $dsatz["ust"];
	$steuernr = $dsatz["steuernr"];
?>
