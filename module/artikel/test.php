<?php

//Datenbank-Verbindung herstellen
include '../../inc/connect.php';

    // Systemeinstellungen Abfrage
	$sysid = 1;
	$sysabfrage = "SELECT mwst FROM einstellungen WHERE id = $sysid";
	$sysresult = mysqli_query($connect, $sysabfrage);

    // Datensatz von Systemeinstellungen in Variablen speichern
	$sysein = mysqli_fetch_assoc($sysresult);
	$steuersatz = $sysein["mwst"];

?>

<script>
function Rabatt() {
return '<?php echo $steuersatz; ?>';
}
</script>


<div id="Anzeige"></div>
<script> document.getElementById("Anzeige").innerHTML = Rabatt(); </script>
