<?php
//Datenbank-Verbindung herstellen
include '../../inc/connect.php';

//fetch data from database
$abfrageartikelsuche = "select artikelname from artikel";
$resultartikelsuche = mysqli_query($connect, $abfrageartikelsuche) or die("Error " . mysqli_error($connect));
?>

<script src="artikelsuche.js"></script>

<html>
<body>
    <input type="text" list="artikelliste" name="artikelsuche" id="artikelsuche" autocomplete="off">
    <datalist id="artikelliste">
        <?php while($row = mysqli_fetch_array($resultartikelsuche)) { ?>
            <option value="<?php echo $row['artikelname']; ?>"><?php echo $row['artikelname']; ?></option>
        <?php } ?>
    </datalist>
    <?php mysqli_close($connect); ?>

<button onclick="myFunction()">&Uuml;bernehmen</button>

<textarea id="beschreibung"></textarea>

</body>
</html>