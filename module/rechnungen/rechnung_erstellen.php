<?php
    if(isset($_POST["rechnung-erstellen"])){

//Datenbank-Verbindung herstellen
include '../../inc/connect.php';

    //Nutzereingabe aus Rechnungsposition in Variablen speichern
    $rechnungjahr = $_POST["rechnungjahr"];
    $bezahlt = $_POST["bezahlt"];
    $kunde = $_POST["kunde"];
    $anrede = $_POST["anrede"];
    $datum = $_POST["datum"];
    $zahlungsziel = $_POST["zahlungsziel"];
    $referenz = $_POST["referenz"];
    $zahlungsbedingungen = $_POST["zahlungsbedingungen"];
    $geserab = $_POST["geserab"];
    $gesprab = $_POST["gesprab"];
    $netto = $_POST["netto"];
    $mwst = $_POST["mwst"];
    $brutto = $_POST["brutto"];
    $offen = $_POST["offen"];
    $gezahlt = $_POST["gezahlt"];
    $pos1 = $_POST["pos"][0];
    $pos1anz = $_POST['anz'][0];
    $pos1einheit = $_POST['einheit'][0];
    $pos1dsc = $_POST['dsc'][0];
    $pos1ep = $_POST['ep'][0];
    $pos1erab = $_POST['poserab'][0];
    $pos1prab = $_POST['posprab'][0];
    $pos2 = $_POST["pos"][1];
    $pos2anz = $_POST['anz'][1];
    $pos2einheit = $_POST['einheit'][1];
    $pos2dsc = $_POST['dsc'][1];
    $pos2ep = $_POST['ep'][1];
    $pos2erab = $_POST['poserab'][1];
    $pos2prab = $_POST['posprab'][1];
    $pos3 = $_POST["pos"][2];
    $pos3anz = $_POST['anz'][2];
    $pos3einheit = $_POST['einheit'][2];
    $pos3dsc = $_POST['dsc'][2];
    $pos3ep = $_POST['ep'][2];
    $pos3erab = $_POST['poserab'][2];
    $pos3prab = $_POST['posprab'][2];
    $pos4 = $_POST["pos"][3];
    $pos4anz = $_POST['anz'][3];
    $pos4einheit = $_POST['einheit'][3];
    $pos4dsc = $_POST['dsc'][3];
    $pos4ep = $_POST['ep'][3];
    $pos4erab = $_POST['poserab'][3];
    $pos4prab = $_POST['posprab'][3];
    $pos5 = $_POST["pos"][4];
    $pos5anz = $_POST['anz'][4];
    $pos5einheit = $_POST['einheit'][4];
    $pos5dsc = $_POST['dsc'][4];
    $pos5ep = $_POST['ep'][4];
    $pos5erab = $_POST['poserab'][4];
    $pos5prab = $_POST['posprab'][4];
    $pos6 = $_POST["pos"][5];
    $pos6anz = $_POST['anz'][5];
    $pos6einheit = $_POST['einheit'][5];
    $pos6dsc = $_POST['dsc'][5];
    $pos6ep = $_POST['ep'][5];
    $pos6erab = $_POST['poserab'][5];
    $pos6prab = $_POST['posprab'][5];
    $pos7 = $_POST["pos"][6];
    $pos7anz = $_POST['anz'][6];
    $pos7einheit = $_POST['einheit'][6];
    $pos7dsc = $_POST['dsc'][6];
    $pos7ep = $_POST['ep'][6];
    $pos7erab = $_POST['poserab'][6];
    $pos7prab = $_POST['posprab'][6];
    $pos8 = $_POST["pos"][7];
    $pos8anz = $_POST['anz'][7];
    $pos8einheit = $_POST['einheit'][7];
    $pos8dsc = $_POST['dsc'][7];
    $pos8ep = $_POST['ep'][7];
    $pos8erab = $_POST['poserab'][7];
    $pos8prab = $_POST['posprab'][7];
    $pos9 = $_POST["pos"][8];
    $pos9anz = $_POST['anz'][8];
    $pos9inheit = $_POST['einheit'][8];
    $pos9dsc = $_POST['dsc'][8];
    $pos9ep = $_POST['ep'][8];
    $pos9erab = $_POST['poserab'][8];
    $pos9prab = $_POST['posprab'][8];
    $pos10 = $_POST["pos"][9];
    $pos10anz = $_POST['anz'][9];
    $pos10einheit = $_POST['einheit'][9];
    $pos10dsc = $_POST['dsc'][9];
    $pos10ep = $_POST['ep'][9];
    $pos10erab = $_POST['poserab'][9];
    $pos10prab = $_POST['posprab'][9];
    $pos11 = $_POST["pos"][10];
    $pos11anz = $_POST['anz'][10];
    $pos11einheit = $_POST['einheit'][10];
    $pos11dsc = $_POST['dsc'][10];
    $pos11ep = $_POST['ep'][10];
    $pos11erab = $_POST['poserab'][10];
    $pos11prab = $_POST['posprab'][10];
    $pos12 = $_POST["pos"][11];
    $pos12anz = $_POST['anz'][11];
    $pos12einheit = $_POST['einheit'][11];
    $pos12dsc = $_POST['dsc'][11];
    $pos12ep = $_POST['ep'][11];
    $pos12erab = $_POST['poserab'][11];
    $pos12prab = $_POST['posprab'][11];
    $pos13 = $_POST["pos"][12];
    $pos13anz = $_POST['anz'][12];
    $pos13einheit = $_POST['einheit'][12];
    $pos13dsc = $_POST['dsc'][12];
    $pos13ep = $_POST['ep'][12];
    $pos13erab = $_POST['poserab'][12];
    $pos13prab = $_POST['posprab'][12];
    $pos14 = $_POST["pos"][13];
    $pos14anz = $_POST['anz'][13];
    $pos14einheit = $_POST['einheit'][13];
    $pos14dsc = $_POST['dsc'][13];
    $pos14ep = $_POST['ep'][13];
    $pos14erab = $_POST['poserab'][13];
    $pos14prab = $_POST['posprab'][13];
    $pos15 = $_POST["pos"][14];
    $pos15anz = $_POST['anz'][14];
    $pos15einheit = $_POST['einheit'][14];
    $pos15dsc = $_POST['dsc'][14];
    $pos15ep = $_POST['ep'][14];
    $pos15erab = $_POST['poserab'][14];
    $pos15prab = $_POST['posprab'][14];
    $pos16 = $_POST["pos"][15];
    $pos16anz = $_POST['anz'][15];
    $pos16einheit = $_POST['einheit'][15];
    $pos16dsc = $_POST['dsc'][15];
    $pos16ep = $_POST['ep'][15];
    $pos16erab = $_POST['poserab'][15];
    $pos16prab = $_POST['posprab'][15];
    $pos17 = $_POST["pos"][16];
    $pos17anz = $_POST['anz'][16];
    $pos17einheit = $_POST['einheit'][16];
    $pos17dsc = $_POST['dsc'][16];
    $pos17ep = $_POST['ep'][16];
    $pos17erab = $_POST['poserab'][16];
    $pos17prab = $_POST['posprab'][16];
    $pos18 = $_POST["pos"][17];
    $pos18anz = $_POST['anz'][17];
    $pos18einheit = $_POST['einheit'][17];
    $pos18dsc = $_POST['dsc'][17];
    $pos18ep = $_POST['ep'][17];
    $pos18erab = $_POST['poserab'][17];
    $pos18prab = $_POST['posprab'][17];
    $pos19 = $_POST["pos"][18];
    $pos19anz = $_POST['anz'][18];
    $pos19einheit = $_POST['einheit'][18];
    $pos19dsc = $_POST['dsc'][18];
    $pos19ep = $_POST['ep'][18];
    $pos19erab = $_POST['poserab'][18];
    $pos19prab = $_POST['posprab'][18];
    $pos20 = $_POST["pos"][19];
    $pos20anz = $_POST['anz'][19];
    $pos20einheit = $_POST['einheit'][19];
    $pos20dsc = $_POST['dsc'][19];
    $pos20ep = $_POST['ep'][19];
    $pos20erab = $_POST['poserab'][19];
    $pos20prab = $_POST['posprab'][19];
    $pos21 = $_POST["pos"][20];
    $pos21anz = $_POST['anz'][20];
    $pos21einheit = $_POST['einheit'][20];
    $pos21dsc = $_POST['dsc'][20];
    $pos21ep = $_POST['ep'][20];
    $pos21erab = $_POST['poserab'][20];
    $pos21prab = $_POST['posprab'][20];
    $pos22 = $_POST["pos"][21];
    $pos22anz = $_POST['anz'][21];
    $pos22einheit = $_POST['einheit'][21];
    $pos22dsc = $_POST['dsc'][21];
    $pos22ep = $_POST['ep'][21];
    $pos22erab = $_POST['poserab'][21];
    $pos22prab = $_POST['posprab'][21];
    $pos23 = $_POST["pos"][22];
    $pos23anz = $_POST['anz'][22];
    $pos23einheit = $_POST['einheit'][22];
    $pos23dsc = $_POST['dsc'][22];
    $pos23ep = $_POST['ep'][22];
    $pos23erab = $_POST['poserab'][22];
    $pos23prab = $_POST['posprab'][22];
    $pos24 = $_POST["pos"][23];
    $pos24anz = $_POST['anz'][23];
    $pos24einheit = $_POST['einheit'][23];
    $pos24dsc = $_POST['dsc'][23];
    $pos24ep = $_POST['ep'][23];
    $pos24erab = $_POST['poserab'][23];
    $pos24prab = $_POST['posprab'][23];
    $pos25 = $_POST["pos"][24];
    $pos25anz = $_POST['anz'][24];
    $pos25einheit = $_POST['einheit'][24];
    $pos25dsc = $_POST['dsc'][24];
    $pos25ep = $_POST['ep'][24];
    $pos25erab = $_POST['poserab'][24];
    $pos25prab = $_POST['posprab'][24];
    $pos26 = $_POST["pos"][25];
    $pos26anz = $_POST['anz'][25];
    $pos26einheit = $_POST['einheit'][25];
    $pos26dsc = $_POST['dsc'][25];
    $pos26ep = $_POST['ep'][25];
    $pos26erab = $_POST['poserab'][25];
    $pos26prab = $_POST['posprab'][25];
    $pos27 = $_POST["pos"][26];
    $pos27anz = $_POST['anz'][26];
    $pos27einheit = $_POST['einheit'][26];
    $pos27dsc = $_POST['dsc'][26];
    $pos27ep = $_POST['ep'][26];
    $pos27erab = $_POST['poserab'][26];
    $pos27prab = $_POST['posprab'][26];
    $pos28 = $_POST["pos"][27];
    $pos28anz = $_POST['anz'][27];
    $pos28einheit = $_POST['einheit'][27];
    $pos28dsc = $_POST['dsc'][27];
    $pos28ep = $_POST['ep'][27];
    $pos28erab = $_POST['poserab'][27];
    $pos28prab = $_POST['posprab'][27];
    $pos29 = $_POST["pos"][28];
    $pos29anz = $_POST['anz'][28];
    $pos29einheit = $_POST['einheit'][28];
    $pos29dsc = $_POST['dsc'][28];
    $pos29ep = $_POST['ep'][28];
    $pos29erab = $_POST['poserab'][28];
    $pos29prab = $_POST['posprab'][28];
    $pos30 = $_POST["pos"][29];
    $pos30anz = $_POST['anz'][29];
    $pos30einheit = $_POST['einheit'][29];
    $pos30dsc = $_POST['dsc'][29];
    $pos30ep = $_POST['ep'][29];
    $pos30erab = $_POST['poserab'][29];
    $pos30prab = $_POST['posprab'][29];


    // 3. String fuer SQL-Anweisung erstellen
    $insertString = "INSERT INTO rechnungen (rechnungjahr, bezahlt, kunde, anrede, datum, zahlungsziel, referenz, zahlungsbedingungen, geserab, gesprab, netto, mwst, brutto, offen, gezahlt,
    pos1, pos1anz, pos1einheit, pos1dsc, pos1ep, pos1erab, pos1prab, 
    pos2, pos2anz, pos2einheit, pos2dsc, pos2ep, pos2erab, pos2prab, 
    pos3, pos3anz, pos3einheit, pos3dsc, pos3ep, pos3erab, pos3prab, 
    pos4, pos4anz, pos4einheit, pos4dsc, pos4ep, pos4erab, pos4prab, 
    pos5, pos5anz, pos5einheit, pos5dsc, pos5ep, pos5erab, pos5prab, 
    pos6, pos6anz, pos6einheit, pos6dsc, pos6ep, pos6erab, pos6prab, 
    pos7, pos7anz, pos7einheit, pos7dsc, pos7ep, pos7erab, pos7prab, 
    pos8, pos8anz, pos8einheit, pos8dsc, pos8ep, pos8erab, pos8prab, 
    pos9, pos9anz, pos9einheit, pos9dsc, pos9ep, pos9erab, pos9prab, 
    pos10, pos10anz, pos10einheit, pos10dsc, pos10ep, pos10erab, pos10prab, 
    pos11, pos11anz, pos11einheit, pos11dsc, pos11ep, pos11erab, pos11prab, 
    pos12, pos12anz, pos12einheit, pos12dsc, pos12ep, pos12erab, pos12prab, 
    pos13, pos13anz, pos13einheit, pos13dsc, pos13ep, pos13erab, pos13prab, 
    pos14, pos14anz, pos14einheit, pos14dsc, pos14ep, pos14erab, pos14prab, 
    pos15, pos15anz, pos15einheit, pos15dsc, pos15ep, pos15erab, pos15prab, 
    pos16, pos16anz, pos16einheit, pos16dsc, pos16ep, pos16erab, pos16prab, 
    pos17, pos17anz, pos17einheit, pos17dsc, pos17ep, pos17erab, pos17prab, 
    pos18, pos18anz, pos18einheit, pos18dsc, pos18ep, pos18erab, pos18prab, 
    pos19, pos19anz, pos19einheit, pos19dsc, pos19ep, pos19erab, pos19prab, 
    pos20, pos20anz, pos20einheit, pos20dsc, pos20ep, pos20erab, pos20prab, 
    pos21, pos21anz, pos21einheit, pos21dsc, pos21ep, pos21erab, pos21prab, 
    pos22, pos22anz, pos22einheit, pos22dsc, pos22ep, pos22erab, pos22prab, 
    pos23, pos23anz, pos23einheit, pos23dsc, pos23ep, pos23erab, pos23prab, 
    pos24, pos24anz, pos24einheit, pos24dsc, pos24ep, pos24erab, pos24prab, 
    pos25, pos25anz, pos25einheit, pos25dsc, pos25ep, pos25erab, pos25prab, 
    pos26, pos26anz, pos26einheit, pos26dsc, pos26ep, pos26erab, pos26prab, 
    pos27, pos27anz, pos27einheit, pos27dsc, pos27ep, pos27erab, pos27prab, 
    pos28, pos28anz, pos28einheit, pos28dsc, pos28ep, pos28erab, pos28prab, 
    pos29, pos29anz, pos29einheit, pos29dsc, pos29ep, pos29erab, pos29prab, 
    pos30, pos30anz, pos30einheit, pos30dsc, pos30ep, pos30erab, pos30prab)
VALUES ('$rechnungjahr', '$bezahlt', '$kunde', '$anrede', '$datum', '$zahlungsziel', '$referenz', '$zahlungsbedingungen', '$geserab', '$gesprab', '$netto', '$mwst', '$brutto', '$offen', '$gezahlt', 
'$pos1', '$pos1anz', '$pos1einheit', '$pos1dsc', '$pos1ep', '$pos1erab', '$pos1prab', 
'$pos2', '$pos2anz', '$pos2einheit', '$pos2dsc', '$pos2ep', '$pos2erab', '$pos2prab', 
'$pos3', '$pos3anz', '$pos3einheit', '$pos3dsc', '$pos3ep', '$pos3erab', '$pos3prab', 
'$pos4', '$pos4anz', '$pos4einheit', '$pos4dsc', '$pos4ep', '$pos4erab', '$pos4prab', 
'$pos5', '$pos5anz', '$pos5einheit', '$pos5dsc', '$pos5ep', '$pos5erab', '$pos5prab', 
'$pos6', '$pos6anz', '$pos6einheit', '$pos6dsc', '$pos6ep', '$pos6erab', '$pos6prab', 
'$pos7', '$pos7anz', '$pos7einheit', '$pos7dsc', '$pos7ep', '$pos7erab', '$pos7prab', 
'$pos8', '$pos8anz', '$pos8einheit', '$pos8dsc', '$pos8ep', '$pos8erab', '$pos8prab', 
'$pos9', '$pos9anz', '$pos9einheit', '$pos9dsc', '$pos9ep', '$pos9erab', '$pos9prab', 
'$pos10', '$pos10anz', '$pos10einheit', '$pos10dsc', '$pos10ep', '$pos10erab', '$pos10prab', 
'$pos11', '$pos11anz', '$pos11einheit', '$pos11dsc', '$pos11ep', '$pos11erab', '$pos11prab', 
'$pos12', '$pos12anz', '$pos12einheit', '$pos12dsc', '$pos12ep', '$pos12erab', '$pos12prab', 
'$pos13', '$pos13anz', '$pos13einheit', '$pos13dsc', '$pos13ep', '$pos13erab', '$pos13prab', 
'$pos14', '$pos14anz', '$pos14einheit', '$pos14dsc', '$pos14ep', '$pos14erab', '$pos14prab', 
'$pos15', '$pos15anz', '$pos15einheit', '$pos15dsc', '$pos15ep', '$pos15erab', '$pos15prab', 
'$pos16', '$pos16anz', '$pos16einheit', '$pos16dsc', '$pos16ep', '$pos16erab', '$pos16prab', 
'$pos17', '$pos17anz', '$pos17einheit', '$pos17dsc', '$pos17ep', '$pos17erab', '$pos17prab', 
'$pos18', '$pos18anz', '$pos18einheit', '$pos18dsc', '$pos18ep', '$pos18erab', '$pos18prab', 
'$pos19', '$pos19anz', '$pos19einheit', '$pos19dsc', '$pos19ep', '$pos19erab', '$pos19prab', 
'$pos20', '$pos20anz', '$pos20einheit', '$pos20dsc', '$pos20ep', '$pos20erab', '$pos20prab', 
'$pos21', '$pos21anz', '$pos21einheit', '$pos21dsc', '$pos21ep', '$pos21erab', '$pos21prab', 
'$pos22', '$pos22anz', '$pos22einheit', '$pos22dsc', '$pos22ep', '$pos22erab', '$pos22prab', 
'$pos23', '$pos23anz', '$pos23einheit', '$pos23dsc', '$pos23ep', '$pos23erab', '$pos23prab', 
'$pos24', '$pos24anz', '$pos24einheit', '$pos24dsc', '$pos24ep', '$pos24erab', '$pos24prab', 
'$pos25', '$pos25anz', '$pos25einheit', '$pos25dsc', '$pos25ep', '$pos25erab', '$pos25prab', 
'$pos26', '$pos26anz', '$pos26einheit', '$pos26dsc', '$pos26ep', '$pos26erab', '$pos26prab', 
'$pos27', '$pos27anz', '$pos27einheit', '$pos27dsc', '$pos27ep', '$pos27erab', '$pos27prab', 
'$pos28', '$pos28anz', '$pos28einheit', '$pos28dsc', '$pos28ep', '$pos28erab', '$pos28prab', 
'$pos29', '$pos29anz', '$pos29einheit', '$pos29dsc', '$pos29ep', '$pos29erab', '$pos29prab', 
'$pos30', '$pos30anz', '$pos30einheit', '$pos30dsc', '$pos30ep', '$pos30erab', '$pos30prab');";


// SQL-Anweisung durchfuehren
    $check = mysqli_query($connect, $insertString);

    if($check) {
        $insertId = mysqli_insert_id($connect);
        header('Location: rechnung_bearbeiten.php?auswahl=' . $insertId . '&created=true');
    } else {
        echo '<span style="color: red;" /><strong>Fehler beim Erstellen</strong></span>';
    }
  }

include '../../inc/header.php';
include '../../inc/nav.php';
?>

     <link rel="stylesheet" href="../../css/angebot.css" type="text/css">

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

<script src="../../js/angebot_erstellen.js"></script>

<section>

<h1>Rechnung erstellen</h1>

<?php
// Hier wird der Kunde ausgegeben, welcher zuvor ausgew&auml;hlt wurde.

  // Kundenauswahl Verarbeitung
    // 1. Verbindung zur Datenbank herstellen
	include '../../inc/connect.php';

    // 2. Pruefe Radio-Button-Auswahl
	if(isset($_GET["auswahl"])){

    // 3. Datenbankabfrage starten
	$id = $_GET["auswahl"];
	$abfrage = "SELECT * FROM kunden WHERE id = $id";
	$result = mysqli_query($connect, $abfrage);

    // 4. Datensatz in Variablen speichern
	$dsatz = mysqli_fetch_assoc($result);
	$firma = $dsatz["firma"];
	$anrede = $dsatz["anrede"];
	$vorname = $dsatz["vorname"];
	$nachname = $dsatz["nachname"];
	$strasse = $dsatz["strasse"];
	$plz = $dsatz["plz"];
	$ort = $dsatz["ort"];
}		

    // 5. Das Bearbeiten-Formular anzeigen
	echo "<form action='rechnung_erstellen.php' method='post'>";
	echo "<div class='column3'>";
	echo "<input name='id' type='hidden' value='$id'>"; ?>
  	<input type="hidden" name="rechnungjahr" value="<?php echo date('Y'); ?>" />
  	<input type="hidden" name="bezahlt" value="0" />
	<?php echo "<textarea name='kunde' rows='10' cols='30'>$firma\n$vorname $nachname\n$strasse\n$plz $ort</textarea>";
	echo "</div>";

// Hier werden Systemeinstellungen ausgegeben

    // 1. Systemeinstellungen Abfrage
	$sysid = 1;
	$sysabfrage = "SELECT mwst FROM einstellungen WHERE id = $sysid";
	$sysresult = mysqli_query($connect, $sysabfrage);

    // 2. Datensatz von Systemeinstellungen in Variablen speichern
	$sysein = mysqli_fetch_assoc($sysresult);
	$steuersatz = $sysein["mwst"];

// Hier wird die Artikelsuche ausgegeben

    // 1. Artikeldaten Abfrage
	$abfrageartikelsuche = "select artikelname from artikel";
	$resultartikelsuche = mysqli_query($connect, $abfrageartikelsuche) or die("Error " . mysqli_error($connect));

?>

<!-- Artikelsuche -->
<datalist id="artikelliste">
  <?php while($row = mysqli_fetch_array($resultartikelsuche)) { ?>
    <option value="<?php echo $row['artikelname']; ?>"><?php echo $row['artikelname']; ?></option>
  <?php } ?>
</datalist>
  <?php mysqli_close($connect); ?>

<!-- Obere Eingabemaske -->
<div class="column3">
  <textarea name="anrede" id="anrede" rows="10" cols="30" placeholder="Anrede" /></textarea>
</div>
<div class="column3">

<div style="float:left;">
  <label style="font-size: 12px">Rechnungsdatum:</label>
  <input type="date" name="datum" value="<?php echo date('Y-m-d'); ?>" />
</div>
<div style="float:right;">
  <label style="font-size: 12px">Zahlungsziel:</label>
  <input type="date" name="zahlungsziel" value="<?php echo date('Y-m-d'); ?>" />
</div>

  <input type="text" disabled name="rechnungid" placeholder="Rechnungsnummer (wird automatisch vergeben)" />
  <input type="text" name="referenz" placeholder="Referenz" />
</div>

<!-- Hier beginnt die Rechnungsbearbeitung für Positionen -->
<!-- Positionen -->
<div>
  <table class="plist" style="font-size:10px;">
    <thead>
      <tr>
	    <th style="width:100px;">Pos.</th>
        <th style="width:100px;border-left:1px solid grey;">Menge</th>
        <th style="width:100px;border-left:1px solid grey;">Einheit</th>
        <th style="width:900px;border-left:1px solid grey;">Beschreibung</th>
        <th style="width:100px;border-left:1px solid grey;">EP Netto</th>
        <th style="width:100px;border-left:1px solid grey;">Pos. Rabatt &euro;</th>
        <th style="width:100px;border-left:1px solid grey;">Pos. Rabatt %</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody id="docpos">
      <tr>
	  	<td valign=top style="width:100px;"><input type=text class="pos" name="pos[]" value="1" size="4" /></td>
        <td valign=top style="width:100px;"><input type=text class="anz" name="anz[]" value="1" size="4" /></td>
        <td valign=top style="width:100px;">
          <select name="einheit[]">
            <option value="Lfm.">Lfm.</option>
            <option value="Pal.">Pal.</option>
            <option value="pschl.">pschl.</option>
            <option value="Pkg.">Pkg.</option>
            <option value="Std.">Std.</option>
            <option value="Stk.">Stk.</option>
          </select>
        </td>
        <td valign=top><input type="text" list="artikelliste" name="artikelsuche" id="artikelsuche" autocomplete="off" placeholder="Artikelsuche" style="width:700px;"><button type="button" class="button3" style="width:185px;">Artikel &uuml;bernehmen</button><br>
          <textarea style="width:900px;" rows=7 name=dsc[] class="artikelbeschreibung"></textarea>
        </td>
        <td valign=top style="width:100px;"><input type=text class="ep" name="ep[]" value="" size="4" /></td>
        <td valign=top style="width:100px;"><input type=text class="poserab" name="poserab[]" value="0" size="4" /></td>
        <td valign=top style="width:100px;"><input type=text class="posprab" name="posprab[]" value="1" size="4" /></td>
        <td valign=top><input style="color:red;" type=button class="del" name="del[]" value=" X " /></td>
      </tr>

    </tbody>
  </table>
</div>

<input type="button" class="button2" name="newpos" style="float:right; clear:both;margin-right:25px;" value="Position erstellen">

<br><br><br><br><br>

<!-- Untere Eingabemaske -->

<div class="column70">
  <div class="column50">
    <textarea name="zahlungsbedingungen" id="zahlungsbedingungen" rows="10" cols="30" placeholder="Zahlungsbedingungen"></textarea>
  </div>

  <div class="column50">
    <select name="gesamtrabatt" id="gesamtrabatt">
      <option value="Rabatt">Rabatt</option>
      <option value="Nachlass">Nachlass</option>
    </select>

    <div id="rabatt">
      <div class="column1">Gesamtrabatt &euro;<input type=text class="geserab" name="geserab" value="0" size="4"></div>
      <div class="column1">Gesamtrabatt %<input type=text class="gesprab" name="gesprab" value="1" size="4"></div>
    </div>
  </div>
  <input class="button" type="submit" name="rechnung-erstellen" value="Rechnung erstellen">

</div>

<div class="column30">
  <div style="width:100%;border: #4B9F93 1px solid;border-bottom:2px solid #F39200;"><br>
    <label>&nbsp;Summe Netto:</label><input type="text" name="netto" id="netto" value="" readonly="" style="border:none;background-color:transparent;width:60%;text-align:left;" tabindex="32000"><br>
    <label>&nbsp;Rabatt / Nachlass:</label><input type="text" name="gr" id="gr" value="" readonly="" style="border:none;background-color:transparent;width:60%;text-align:left;" tabindex="32000"><br>
    <label>&nbsp;Summe Netto nach Abzug:</label><input type="text" name="nettoabzug" id="nettoabzug" value="" readonly="" style="border:none;background-color:transparent;width:60%;text-align:left;" tabindex="32000"><br>
    <label>&nbsp;MwSt <?php echo $steuersatz; ?>%:</label><input type="text" name="mwst" id="steuer" value="" readonly="" style="border:none;background-color:transparent;width:60%;text-align:left;" tabindex="32000"><br>
    <label style="font-weight:bold;">&nbsp;Gesamt Brutto:</label><input type="text" name="brutto" id="brutto" value="" readonly="" style="border:none;background-color:transparent;width:60%;text-align:left;font-weight:bold;" tabindex="32000">
  </div>
</div>

</form>
&nbsp;

</section>
<?php
include '../../inc/footer.php';
?>

</body>
</html>
