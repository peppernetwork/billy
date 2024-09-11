<?php
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

<h1>Rechnung bearbeiten</h1>

<?php

// 1. Verbindung zur Datenbank herstellen
include '../../inc/connect.php';

// 2. Pruefe Radio-Button-Auswahl
if(isset($_GET["auswahl"])){

  if ($_GET["created"]) {
    echo '<span style="color: green;" /><strong>Rechnung erfolgreich erstellt</strong></span>';
  }

    // 3. Datenbankabfrage starten
	$id = $_GET["auswahl"];
	$abfrage = "SELECT * FROM rechnungen WHERE rechnungid = $id";
	$result = mysqli_query($connect, $abfrage);

    // 4. Datensatz in Variablen speichern
	$dsatz = mysqli_fetch_assoc($result);
	$rechnungid = $dsatz["rechnungid"];
	$rechnungjahr = $dsatz["rechnungjahr"];
	$kunde = $dsatz["kunde"];
	$anrede = $dsatz["anrede"];
	$datum = $dsatz["datum"];
	$zahlungsziel = $dsatz["zahlungsziel"];
	$referenz = $dsatz["referenz"];
	$zahlungsbedingungen = $dsatz["zahlungsbedingungen"];
	$geserab = $dsatz["geserab"];
	$gesprab = $dsatz["gesprab"];
	$netto = $dsatz["netto"];
	$mwst = $dsatz["mwst"];
	$brutto = $dsatz["brutto"];
	$offen = $dsatz["offen"];
	$gezahlt = $dsatz["gezahlt"];
	$pos1 = $dsatz["pos1"];
	$pos1anz = $dsatz["pos1anz"];
	$pos1einheit = $dsatz["pos1einheit"];
	$pos1dsc = $dsatz["pos1dsc"];
	$pos1ep = $dsatz["pos1ep"];
	$pos1erab = $dsatz["pos1erab"];
	$pos1prab = $dsatz["pos1prab"];
	$pos2 = $dsatz["pos2"];	
	$pos2anz = $dsatz["pos2anz"];
	$pos2einheit = $dsatz["pos2einheit"];
	$pos2dsc = $dsatz["pos2dsc"];
	$pos2ep = $dsatz["pos2ep"];
	$pos2erab = $dsatz["pos2erab"];
	$pos2prab = $dsatz["pos2prab"];
	$pos3 = $dsatz["pos3"];	
	$pos3anz = $dsatz["pos3anz"];
	$pos3einheit = $dsatz["pos3einheit"];
	$pos3dsc = $dsatz["pos3dsc"];
	$pos3ep = $dsatz["pos3ep"];
	$pos3erab = $dsatz["pos3erab"];
	$pos3prab = $dsatz["pos3prab"];
	$pos4 = $dsatz["pos4"];	
	$pos4anz = $dsatz["pos4anz"];
	$pos4einheit = $dsatz["pos4einheit"];
	$pos4dsc = $dsatz["pos4dsc"];
	$pos4ep = $dsatz["pos4ep"];
	$pos4erab = $dsatz["pos4erab"];
	$pos4prab = $dsatz["pos4prab"];
	$pos5 = $dsatz["pos5"];	
	$pos5anz = $dsatz["pos5anz"];
	$pos5einheit = $dsatz["pos5einheit"];
	$pos5dsc = $dsatz["pos5dsc"];
	$pos5ep = $dsatz["pos5ep"];
	$pos5erab = $dsatz["pos5erab"];
	$pos5prab = $dsatz["pos5prab"];
	$pos6 = $dsatz["pos6"];	
	$pos6anz = $dsatz["pos6anz"];
	$pos6einheit = $dsatz["pos6einheit"];
	$pos6dsc = $dsatz["pos6dsc"];
	$pos6ep = $dsatz["pos6ep"];
	$pos6erab = $dsatz["pos6erab"];
	$pos6prab = $dsatz["pos6prab"];
	$pos7 = $dsatz["pos7"];	
	$pos7anz = $dsatz["pos7anz"];
	$pos7einheit = $dsatz["pos7einheit"];
	$pos7dsc = $dsatz["pos7dsc"];
	$pos7ep = $dsatz["pos7ep"];
	$pos7erab = $dsatz["pos7erab"];
	$pos7prab = $dsatz["pos7prab"];
	$pos8 = $dsatz["pos8"];	
	$pos8anz = $dsatz["pos8anz"];
	$pos8einheit = $dsatz["pos8einheit"];
	$pos82dsc = $dsatz["pos8dsc"];
	$pos8ep = $dsatz["pos8ep"];
	$pos8erab = $dsatz["pos8erab"];
	$pos8prab = $dsatz["pos8prab"];
	$pos9 = $dsatz["pos9"];	
	$pos9anz = $dsatz["pos9anz"];
	$pos9einheit = $dsatz["pos9einheit"];
	$pos9dsc = $dsatz["pos9dsc"];
	$pos9ep = $dsatz["pos9ep"];
	$pos9erab = $dsatz["pos9erab"];
	$pos9prab = $dsatz["pos9prab"];
	$pos10 = $dsatz["pos10"];	
	$pos10anz = $dsatz["pos10anz"];
	$pos10einheit = $dsatz["pos10einheit"];
	$pos10dsc = $dsatz["pos10dsc"];
	$pos10ep = $dsatz["pos10ep"];
	$pos10erab = $dsatz["pos10erab"];
	$pos10prab = $dsatz["pos10prab"];
	$pos11 = $dsatz["pos11"];	
	$pos11anz = $dsatz["pos11anz"];
	$pos11einheit = $dsatz["pos11einheit"];
	$pos11dsc = $dsatz["pos11dsc"];
	$pos11ep = $dsatz["pos11ep"];
	$pos11erab = $dsatz["pos11erab"];
	$pos11prab = $dsatz["pos11prab"];
	$pos12 = $dsatz["pos12"];	
	$pos12anz = $dsatz["pos12anz"];
	$pos12einheit = $dsatz["pos12einheit"];
	$pos12dsc = $dsatz["pos12dsc"];
	$pos12ep = $dsatz["pos12ep"];
	$pos12erab = $dsatz["pos12erab"];
	$pos12prab = $dsatz["pos12prab"];
	$pos13 = $dsatz["pos13"];	
	$pos13anz = $dsatz["pos13anz"];
	$pos13einheit = $dsatz["pos13einheit"];
	$pos13dsc = $dsatz["pos13dsc"];
	$pos13ep = $dsatz["pos13ep"];
	$pos13erab = $dsatz["pos13erab"];
	$pos13prab = $dsatz["pos13prab"];
	$pos14 = $dsatz["pos14"];	
	$pos14anz = $dsatz["pos14anz"];
	$pos14einheit = $dsatz["pos14einheit"];
	$pos14dsc = $dsatz["pos14dsc"];
	$pos14ep = $dsatz["pos14ep"];
	$pos14erab = $dsatz["pos14erab"];
	$pos14prab = $dsatz["pos14prab"];
	$pos15 = $dsatz["pos15"];	
	$pos15anz = $dsatz["pos15anz"];
	$pos15einheit = $dsatz["pos15einheit"];
	$pos15dsc = $dsatz["pos15dsc"];
	$pos15ep = $dsatz["pos15ep"];
	$pos15erab = $dsatz["pos15erab"];
	$pos15prab = $dsatz["pos15prab"];
	$pos16 = $dsatz["pos16"];	
	$pos16anz = $dsatz["pos16anz"];
	$pos16einheit = $dsatz["pos16einheit"];
	$pos16dsc = $dsatz["pos16dsc"];
	$pos16ep = $dsatz["pos16ep"];
	$pos16erab = $dsatz["pos16erab"];
	$pos16prab = $dsatz["pos16prab"];
	$pos17 = $dsatz["pos17"];	
	$pos17anz = $dsatz["pos17anz"];
	$pos17einheit = $dsatz["pos17einheit"];
	$pos17dsc = $dsatz["pos17dsc"];
	$pos17ep = $dsatz["pos17ep"];
	$pos17erab = $dsatz["pos17erab"];
	$pos17prab = $dsatz["pos17prab"];
	$pos18 = $dsatz["pos18"];	
	$pos18anz = $dsatz["pos18anz"];
	$pos18einheit = $dsatz["pos18einheit"];
	$pos18dsc = $dsatz["pos18dsc"];
	$pos18ep = $dsatz["pos18ep"];
	$pos18erab = $dsatz["pos18erab"];
	$pos18prab = $dsatz["pos18prab"];
	$pos19 = $dsatz["pos19"];	
	$pos19anz = $dsatz["pos19anz"];
	$pos19einheit = $dsatz["pos19einheit"];
	$pos19dsc = $dsatz["pos19dsc"];
	$pos19ep = $dsatz["pos19ep"];
	$pos19erab = $dsatz["pos19erab"];
	$pos19prab = $dsatz["pos19prab"];
	$pos20 = $dsatz["pos20"];	
	$pos20anz = $dsatz["pos20anz"];
	$pos20einheit = $dsatz["pos20einheit"];
	$pos20dsc = $dsatz["pos20dsc"];
	$pos20ep = $dsatz["pos20ep"];
	$pos20erab = $dsatz["pos20erab"];
	$pos20prab = $dsatz["pos20prab"];
	$pos21 = $dsatz["pos21"];	
	$pos21anz = $dsatz["pos21anz"];
	$pos21einheit = $dsatz["pos21einheit"];
	$pos21dsc = $dsatz["pos21dsc"];
	$pos21ep = $dsatz["pos21ep"];
	$pos21erab = $dsatz["pos21erab"];
	$pos21prab = $dsatz["pos21prab"];
	$pos22 = $dsatz["pos22"];	
	$pos22anz = $dsatz["pos22anz"];
	$pos22einheit = $dsatz["pos22einheit"];
	$pos22dsc = $dsatz["pos22dsc"];
	$pos22ep = $dsatz["pos22ep"];
	$pos22erab = $dsatz["pos22erab"];
	$pos22prab = $dsatz["pos22prab"];
	$pos23 = $dsatz["pos23"];	
	$pos23anz = $dsatz["pos23anz"];
	$pos23einheit = $dsatz["pos23einheit"];
	$pos23dsc = $dsatz["pos23dsc"];
	$pos23ep = $dsatz["pos23ep"];
	$pos23erab = $dsatz["pos23erab"];
	$pos23prab = $dsatz["pos23prab"];
	$pos24 = $dsatz["pos24"];	
	$pos24anz = $dsatz["pos24anz"];
	$pos24einheit = $dsatz["pos24einheit"];
	$pos24dsc = $dsatz["pos24dsc"];
	$pos24ep = $dsatz["pos24ep"];
	$pos24erab = $dsatz["pos24erab"];
	$pos24prab = $dsatz["pos24prab"];
	$pos25 = $dsatz["pos25"];	
	$pos25anz = $dsatz["pos25anz"];
	$pos25einheit = $dsatz["pos25einheit"];
	$pos25dsc = $dsatz["pos25dsc"];
	$pos25ep = $dsatz["pos25ep"];
	$pos25erab = $dsatz["pos25erab"];
	$pos25prab = $dsatz["pos25prab"];
	$pos26 = $dsatz["pos26"];	
	$pos26anz = $dsatz["pos26anz"];
	$pos26einheit = $dsatz["pos26einheit"];
	$pos26dsc = $dsatz["pos26dsc"];
	$pos26ep = $dsatz["pos26ep"];
	$pos26erab = $dsatz["pos26erab"];
	$pos26prab = $dsatz["pos26prab"];
	$pos27 = $dsatz["pos27"];	
	$pos27anz = $dsatz["pos27anz"];
	$pos27einheit = $dsatz["pos27einheit"];
	$pos27dsc = $dsatz["pos27dsc"];
	$pos27ep = $dsatz["pos27ep"];
	$pos27erab = $dsatz["pos27erab"];
	$pos27prab = $dsatz["pos27prab"];
	$pos28 = $dsatz["pos28"];	
	$pos28anz = $dsatz["pos28anz"];
	$pos28einheit = $dsatz["pos28einheit"];
	$pos28dsc = $dsatz["pos28dsc"];
	$pos28ep = $dsatz["pos28ep"];
	$pos28erab = $dsatz["pos28erab"];
	$pos28prab = $dsatz["pos28prab"];
	$pos29 = $dsatz["pos29"];	
	$pos29anz = $dsatz["pos29anz"];
	$pos29einheit = $dsatz["pos29einheit"];
	$pos29dsc = $dsatz["pos29dsc"];
	$pos29ep = $dsatz["pos29ep"];
	$pos29erab = $dsatz["pos29erab"];
	$pos29prab = $dsatz["pos29prab"];
	$pos30 = $dsatz["pos30"];	
	$pos30anz = $dsatz["pos30anz"];
	$pos30einheit = $dsatz["pos30einheit"];
	$pos30dsc = $dsatz["pos30dsc"];
	$pos30ep = $dsatz["pos30ep"];
	$pos30erab = $dsatz["pos30erab"];
	$pos30prab = $dsatz["pos30prab"];
	
	    // SQL-Anweisung durchfuehren
    $check = mysqli_query($connect, $insertString);

    if($check) {
        echo '<span style="color: green;" /><strong>Angebot erfolgreich erstellt</strong></span>';
    }
}		

    // 5. Das Bearbeiten-Formular anzeigen
	echo "<form action='rechnung_bearbeiten.php?auswahl=" . $id . "' method='post'>";
	echo "<div class='column3'>";
	echo "<input name='id' type='hidden' value='$id'>";
	echo "<textarea name='kunde' rows='10' cols='30'>$kunde</textarea>";
	echo "</div>";

    if(isset($_POST['rechnung-bearbeiten']))
    {
    header("Location: rechnung_bearbeiten.php?auswahl=$id");
    }

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
  
<!-- Obere Eingabemaske -->
<div class="column3">
 <?php echo "<textarea name='anrede' id='anrede' rows='10' cols='30' placeholder='Anrede'/>$anrede</textarea>"; ?>
</div>
<div class="column3">

  <?php
    echo "<div style='float:left;'>
  <label style='font-size: 12px'>Rechnungsdatum:</label>
  <input type='date' name='datum' value='$datum' />
</div>
<div style='float:right;'>
  <label style='font-size: 12px'>Zahlungsziel:</label>
  <input type='date' name='zahlungsziel' value='$zahlungsziel' />
</div>";
    echo "<input type='text' disabled name='rechnungid' placeholder='Rechnungsnummer (wird automatisch vergeben)' value='Rechnung Nr. $rechnungjahr-$rechnungid' />";
    echo "<input type='text' name='referenz' placeholder='Referenz' value='$referenz' />";
  ?>
</div>

<!-- Hier beginnt die Rechnungsbearbeitung fuer Positionen -->
<!-- Positionen -->
<div>
  <table class="plist" style="font-size:10px;">
    <thead>
      <tr>
	    <th style="width:100px;">Pos.</th>
        <th style="width:100px;">Menge</th>
        <th style="width:100px;border-left:1px solid grey;">Einheit</th>
        <th style="width:900px;border-left:1px solid grey;">Beschreibung</th>
        <th style="width:100px;border-left:1px solid grey;">EP Netto</th>
        <th style="width:100px;border-left:1px solid grey;">Pos. Rabatt &euro;</th>
        <th style="width:100px;border-left:1px solid grey;">Pos. Rabatt %</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody id="docpos">

      <?php
        $positionenArray = [
          ["pos" => $pos1, "menge" => $pos1anz, "einheit" => $pos1einheit, "dsc" => $pos1dsc, "ep" => $pos1ep, "poserab" => $pos1erab, "posprab" => $pos1prab],
          ["pos" => $pos2, "menge" => $pos2anz, "einheit" => $pos2einheit, "dsc" => $pos2dsc, "ep" => $pos2ep, "poserab" => $pos2erab, "posprab" => $pos2prab],
          ["pos" => $pos3, "menge" => $pos3anz, "einheit" => $pos3einheit, "dsc" => $pos3dsc, "ep" => $pos2ep, "poserab" => $pos3erab, "posprab" => $pos3prab],
          ["pos" => $pos4, "menge" => $pos4anz, "einheit" => $pos4einheit, "dsc" => $pos4dsc, "ep" => $pos4ep, "poserab" => $pos4erab, "posprab" => $pos4prab],
          ["pos" => $pos5, "menge" => $pos5anz, "einheit" => $pos5einheit, "dsc" => $pos5dsc, "ep" => $pos5ep, "poserab" => $pos5erab, "posprab" => $pos5prab],
          ["pos" => $pos6, "menge" => $pos6anz, "einheit" => $pos6einheit, "dsc" => $pos6dsc, "ep" => $pos6ep, "poserab" => $pos6erab, "posprab" => $pos6prab],
          ["pos" => $pos7, "menge" => $pos7anz, "einheit" => $pos7einheit, "dsc" => $pos7dsc, "ep" => $pos7ep, "poserab" => $pos7erab, "posprab" => $pos7prab],
          ["pos" => $pos8, "menge" => $pos8anz, "einheit" => $pos8einheit, "dsc" => $pos8dsc, "ep" => $pos8ep, "poserab" => $pos8erab, "posprab" => $pos8prab],
          ["pos" => $pos9, "menge" => $pos9anz, "einheit" => $pos9einheit, "dsc" => $pos9dsc, "ep" => $pos9ep, "poserab" => $pos9erab, "posprab" => $pos9prab],
          ["pos" => $pos10, "menge" => $pos10anz, "einheit" => $pos10einheit, "dsc" => $pos10dsc, "ep" => $pos10ep, "poserab" => $pos10erab, "posprab" => $pos10prab],
          ["pos" => $pos11, "menge" => $pos11anz, "einheit" => $pos11einheit, "dsc" => $pos11dsc, "ep" => $pos11ep, "poserab" => $pos11erab, "posprab" => $pos11prab],
          ["pos" => $pos12, "menge" => $pos12anz, "einheit" => $pos12einheit, "dsc" => $pos12dsc, "ep" => $pos12ep, "poserab" => $pos12erab, "posprab" => $pos12prab],
          ["pos" => $pos13, "menge" => $pos13anz, "einheit" => $pos13einheit, "dsc" => $pos13dsc, "ep" => $pos13ep, "poserab" => $pos13erab, "posprab" => $pos13prab],
          ["pos" => $pos14, "menge" => $pos14anz, "einheit" => $pos14einheit, "dsc" => $pos14dsc, "ep" => $pos14ep, "poserab" => $pos14erab, "posprab" => $pos14prab],
          ["pos" => $pos15, "menge" => $pos15anz, "einheit" => $pos15einheit, "dsc" => $pos15dsc, "ep" => $pos15ep, "poserab" => $pos15erab, "posprab" => $pos15prab],
          ["pos" => $pos16, "menge" => $pos16anz, "einheit" => $pos16einheit, "dsc" => $pos16dsc, "ep" => $pos16ep, "poserab" => $pos16erab, "posprab" => $pos16prab],
          ["pos" => $pos17, "menge" => $pos17anz, "einheit" => $pos17einheit, "dsc" => $pos17dsc, "ep" => $pos17ep, "poserab" => $pos17erab, "posprab" => $pos17prab],
          ["pos" => $pos18, "menge" => $pos18anz, "einheit" => $pos18einheit, "dsc" => $pos18dsc, "ep" => $pos18ep, "poserab" => $pos18erab, "posprab" => $pos18prab],
          ["pos" => $pos19, "menge" => $pos19anz, "einheit" => $pos19einheit, "dsc" => $pos19dsc, "ep" => $pos19ep, "poserab" => $pos19erab, "posprab" => $pos19prab],
          ["pos" => $pos20, "menge" => $pos20anz, "einheit" => $pos20einheit, "dsc" => $pos20dsc, "ep" => $pos20ep, "poserab" => $pos20erab, "posprab" => $pos20prab],
          ["pos" => $pos21, "menge" => $pos21anz, "einheit" => $pos21einheit, "dsc" => $pos21dsc, "ep" => $pos21ep, "poserab" => $pos21erab, "posprab" => $pos21prab],
          ["pos" => $pos22, "menge" => $pos22anz, "einheit" => $pos22einheit, "dsc" => $pos22dsc, "ep" => $pos22ep, "poserab" => $pos22erab, "posprab" => $pos22prab],
          ["pos" => $pos23, "menge" => $pos23anz, "einheit" => $pos23einheit, "dsc" => $pos23dsc, "ep" => $pos23ep, "poserab" => $pos23erab, "posprab" => $pos23prab],
          ["pos" => $pos24, "menge" => $pos24anz, "einheit" => $pos24einheit, "dsc" => $pos24dsc, "ep" => $pos24ep, "poserab" => $pos24erab, "posprab" => $pos24prab],
          ["pos" => $pos25, "menge" => $pos25anz, "einheit" => $pos25einheit, "dsc" => $pos25dsc, "ep" => $pos25ep, "poserab" => $pos25erab, "posprab" => $pos25prab],
          ["pos" => $pos26, "menge" => $pos26anz, "einheit" => $pos26einheit, "dsc" => $pos26dsc, "ep" => $pos26ep, "poserab" => $pos26erab, "posprab" => $pos26prab],
          ["pos" => $pos27, "menge" => $pos27anz, "einheit" => $pos27einheit, "dsc" => $pos27dsc, "ep" => $pos27ep, "poserab" => $pos27erab, "posprab" => $pos27prab],
          ["pos" => $pos28, "menge" => $pos28anz, "einheit" => $pos28einheit, "dsc" => $pos28dsc, "ep" => $pos28ep, "poserab" => $pos28erab, "posprab" => $pos28prab],
          ["pos" => $pos29, "menge" => $pos29anz, "einheit" => $pos29einheit, "dsc" => $pos29dsc, "ep" => $pos29ep, "poserab" => $pos29erab, "posprab" => $pos29prab],
          ["pos" => $pos30, "menge" => $pos30anz, "einheit" => $pos30einheit, "dsc" => $pos30dsc, "ep" => $pos30ep, "poserab" => $pos30erab, "posprab" => $pos30prab]
        ];

        foreach ($positionenArray as $i=>$position) {
          if (!($position['menge'] > 0) && $i != 0) {
            continue;
          }
      ?>

      <tr>        
	    <td valign=top style="width:100px;"><?php echo "<input type=text class='pos' name='pos[]' value='" . $position['pos'] . "' size='4' />"; ?></td>
        <td valign=top style="width:100px;"><?php echo "<input type=text class='anz' name='anz[]' value='" . $position['menge'] . "' size='4' />"; ?></td>
        <td valign=top style="width:100px;">
          <select name='einheit[]'>
	    <?php echo "<option>" . $position['einheit'] . "</option>"; ?>
	    <option>-----</option>
            <option value='Lfm.'>Lfm.</option>
            <option value='Pal.'>Pal.</option>
            <option value='pschl.'>pschl.</option>
            <option value='Pkg.'>Pkg.</option>
            <option value='Std.'>Std.</option>
            <option value='Stk.'>Stk.</option>
          </select>
        </td>
        <td valign=top><input type="text" list="artikelliste" name="artikelsuche" id="artikelsuche" autocomplete="off" placeholder="Artikelsuche" style="width:700px;"><button type="button" class="button3" style="width:185px;">Artikel &uuml;bernehmen</button><br>
          <?php echo "<textarea style='width:900px;' rows=7 name=dsc[] class='artikelbeschreibung'>" . $position['dsc'] . "</textarea>"; ?>
        </td>
        <td valign=top style="width:100px;"><?php echo "<input type=text class='ep' name='ep[]' value='" . $position['ep'] . "' size='4' />"; ?> </td>
        <td valign=top style="width:100px;"><?php echo "<input type=text class='poserab' name='poserab[]' value='" . $position['poserab'] . "' size='4' />"; ?></td>
        <td valign=top style="width:100px;"><?php echo "<input type=text class='posprab' name='posprab[]' value='" . $position['posprab'] . "' size='4' />"; ?></td>
        <td valign=top><input style="color:red;" type=button class="del" name="del[]" value=" X " /></td>
      </tr>

      <?php
        }
      ?>

    </tbody>
  </table>
</div>

<input type="button" class="button2" name="newpos" style="float:right; clear:both;margin-right:25px;" value="Position erstellen">

<br><br><br><br><br>

<!-- Untere Eingabemaske -->

<div class="column70">
  <div class="column50">
    <?php echo "<textarea name='zahlungsbedingungen' id='zahlungsbedingungen' rows='10' cols='30' placeholder='Zahlungsbedingungen'>$zahlungsbedingungen</textarea>"; ?>
  </div>

  <div class="column50">
    <select name="gesamtrabatt" id="gesamtrabatt">
      <option value="Rabatt">Rabatt</option>
      <option value="Nachlass">Nachlass</option>
    </select>

    <div id="rabatt">
      <div class="column1">Gesamtrabatt &euro;<?php echo "<input type='text' class='geserab' name='geserab' value='$geserab' size='4' /></div>";?>
      <div class="column1">Gesamtrabatt %<?php echo "<input type='text' class='gesprab' name='gesprab' value='$gesprab' size='4' /></div>";?>
    </div>
  </div>
  <input class="button" type="submit" name="rechnung-bearbeiten" value="Rechnung speichern">

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

<!-- Hier beginnt das Datenbank Update -->
<?php
//6. Datensatz aktualisieren mit UPDATE
if(isset($_POST["rechnung-bearbeiten"])){
	$id = $_POST["id"];
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
	$pos1anz = $_POST["anz"][0];
	$pos1einheit = $_POST["einheit"][0];
	$pos1dsc = $_POST["dsc"][0];
	$pos1ep = $_POST["ep"][0];
	$pos1erab = $_POST["poserab"][0];
	$pos1prab = $_POST["posprab"][0];
  $pos2 = $_POST["pos"][1];
	$pos2anz = $_POST["anz"][1];
	$pos2einheit = $_POST["einheit"][1];
	$pos2dsc = $_POST["dsc"][1];
	$pos2ep = $_POST["ep"][1];
	$pos2erab = $_POST["poserab"][1];
	$pos2prab = $_POST["posprab"][1];
  $pos3 = $_POST["pos"][2];
	$pos3anz = $_POST["anz"][2];
	$pos3einheit = $_POST["einheit"][2];
	$pos3dsc = $_POST["dsc"][2];
	$pos3ep = $_POST["ep"][2];
	$pos3erab = $_POST["poserab"][2];
	$pos3prab = $_POST["posprab"][2];
  $pos4 = $_POST["pos"][3];
	$pos4anz = $_POST["anz"][3];
	$pos4einheit = $_POST["einheit"][3];
	$pos4dsc = $_POST["dsc"][3];
	$pos4ep = $_POST["ep"][3];
	$pos4erab = $_POST["poserab"][3];
	$pos4prab = $_POST["posprab"][3];
  $pos5 = $_POST["pos"][4];
	$pos5anz = $_POST["anz"][4];
	$pos5einheit = $_POST["einheit"][4];
	$pos5dsc = $_POST["dsc"][4];
	$pos5ep = $_POST["ep"][4];
	$pos5erab = $_POST["poserab"][4];
	$pos5prab = $_POST["posprab"][4];
  $pos6 = $_POST["pos"][5];
	$pos6anz = $_POST["anz"][5];
	$pos6einheit = $_POST["einheit"][5];
	$pos6dsc = $_POST["dsc"][5];
	$pos6ep = $_POST["ep"][5];
	$pos6erab = $_POST["poserab"][5];
	$pos6prab = $_POST["posprab"][5];
  $pos7 = $_POST["pos"][6];
	$pos7anz = $_POST["anz"][6];
	$pos7einheit = $_POST["einheit"][6];
	$pos7dsc = $_POST["dsc"][6];
	$pos7ep = $_POST["ep"][6];
	$pos7erab = $_POST["poserab"][6];
	$pos7prab = $_POST["posprab"][6];
  $pos8 = $_POST["pos"][7];
	$pos8anz = $_POST["anz"][7];
	$pos8einheit = $_POST["einheit"][7];
	$pos8dsc = $_POST["dsc"][7];
	$pos8ep = $_POST["ep"][7];
	$pos8erab = $_POST["poserab"][7];
	$pos8prab = $_POST["posprab"][7];
  $pos9 = $_POST["pos"][8];
	$pos9anz = $_POST["anz"][8];
	$pos9einheit = $_POST["einheit"][8];
	$pos9dsc = $_POST["dsc"][8];
	$pos9ep = $_POST["ep"][8];
	$pos9erab = $_POST["poserab"][8];
	$pos9prab = $_POST["posprab"][8];
  $pos10 = $_POST["pos"][9];
	$pos10anz = $_POST["anz"][9];
	$pos10einheit = $_POST["einheit"][9];
	$pos10dsc = $_POST["dsc"][9];
	$pos10ep = $_POST["ep"][9];
	$pos10erab = $_POST["poserab"][9];
	$pos10prab = $_POST["posprab"][9];
  $pos11 = $_POST["pos"][10];
	$pos11anz = $_POST["anz"][10];
	$pos11einheit = $_POST["einheit"][10];
	$pos11dsc = $_POST["dsc"][10];
	$pos11ep = $_POST["ep"][10];
	$pos11erab = $_POST["poserab"][10];
	$pos11prab = $_POST["posprab"][10];
  $pos12 = $_POST["pos"][11];
	$pos12anz = $_POST["anz"][11];
	$pos12einheit = $_POST["einheit"][11];
	$pos12dsc = $_POST["dsc"][11];
	$pos12ep = $_POST["ep"][11];
	$pos12erab = $_POST["poserab"][11];
	$pos12prab = $_POST["posprab"][11];
  $pos13 = $_POST["pos"][12];
	$pos13anz = $_POST["anz"][12];
	$pos13einheit = $_POST["einheit"][12];
	$pos13dsc = $_POST["dsc"][12];
	$pos13ep = $_POST["ep"][12];
	$pos13erab = $_POST["poserab"][12];
	$pos13prab = $_POST["posprab"][12];
  $pos14 = $_POST["pos"][13];
	$pos14anz = $_POST["anz"][13];
	$pos14einheit = $_POST["einheit"][13];
	$pos14dsc = $_POST["dsc"][13];
	$pos14ep = $_POST["ep"][13];
	$pos14erab = $_POST["poserab"][13];
	$pos14prab = $_POST["posprab"][13];
  $pos15 = $_POST["pos"][14];
	$pos15anz = $_POST["anz"][14];
	$pos15einheit = $_POST["einheit"][14];
	$pos15dsc = $_POST["dsc"][14];
	$pos15ep = $_POST["ep"][14];
	$pos15erab = $_POST["poserab"][14];
	$pos15prab = $_POST["posprab"][14];
  $pos16 = $_POST["pos"][15];
	$pos16anz = $_POST["anz"][15];
	$pos16einheit = $_POST["einheit"][15];
	$pos16dsc = $_POST["dsc"][15];
	$pos16ep = $_POST["ep"][15];
	$pos16erab = $_POST["poserab"][15];
	$pos16prab = $_POST["posprab"][15];
  $pos17 = $_POST["pos"][16];
	$pos17anz = $_POST["anz"][16];
	$pos17einheit = $_POST["einheit"][16];
	$pos17dsc = $_POST["dsc"][16];
	$pos17ep = $_POST["ep"][16];
	$pos17erab = $_POST["poserab"][16];
	$pos17prab = $_POST["posprab"][16];
  $pos18 = $_POST["pos"][17];
	$pos18anz = $_POST["anz"][17];
	$pos18einheit = $_POST["einheit"][17];
	$pos18dsc = $_POST["dsc"][17];
	$pos18ep = $_POST["ep"][17];
	$pos18erab = $_POST["poserab"][17];
	$pos18prab = $_POST["posprab"][17];
  $pos19 = $_POST["pos"][18];
	$pos19anz = $_POST["anz"][18];
	$pos19einheit = $_POST["einheit"][18];
	$pos19dsc = $_POST["dsc"][18];
	$pos19ep = $_POST["ep"][18];
	$pos19erab = $_POST["poserab"][18];
	$pos19prab = $_POST["posprab"][18];
  $pos20 = $_POST["pos"][19];
	$pos20anz = $_POST["anz"][19];
	$pos20einheit = $_POST["einheit"][19];
	$pos20dsc = $_POST["dsc"][19];
	$pos20ep = $_POST["ep"][19];
	$pos20erab = $_POST["poserab"][19];
	$pos20prab = $_POST["posprab"][19];
  $pos21 = $_POST["pos"][20];
	$pos21anz = $_POST["anz"][20];
	$pos21einheit = $_POST["einheit"][20];
	$pos21dsc = $_POST["dsc"][20];
	$pos21ep = $_POST["ep"][20];
	$pos21erab = $_POST["poserab"][20];
	$pos21prab = $_POST["posprab"][20];
  $pos22 = $_POST["pos"][21];
	$pos22anz = $_POST["anz"][21];
	$pos22einheit = $_POST["einheit"][21];
	$pos22dsc = $_POST["dsc"][21];
	$pos22ep = $_POST["ep"][21];
	$pos22erab = $_POST["poserab"][21];
	$pos22prab = $_POST["posprab"][21];
  $pos23 = $_POST["pos"][22];
	$pos23anz = $_POST["anz"][22];
	$pos23einheit = $_POST["einheit"][22];
	$pos23dsc = $_POST["dsc"][22];
	$pos23ep = $_POST["ep"][22];
	$pos23erab = $_POST["poserab"][22];
	$pos23prab = $_POST["posprab"][22];
  $pos24 = $_POST["pos"][23];
	$pos24anz = $_POST["anz"][23];
	$pos24einheit = $_POST["einheit"][23];
	$pos24dsc = $_POST["dsc"][23];
	$pos24ep = $_POST["ep"][23];
	$pos24erab = $_POST["poserab"][23];
	$pos24prab = $_POST["posprab"][23];
  $pos25 = $_POST["pos"][24];
	$pos25anz = $_POST["anz"][24];
	$pos25einheit = $_POST["einheit"][24];
	$pos25dsc = $_POST["dsc"][24];
	$pos25ep = $_POST["ep"][24];
	$pos25erab = $_POST["poserab"][24];
	$pos25prab = $_POST["posprab"][24];
  $pos26 = $_POST["pos"][25];
	$pos26anz = $_POST["anz"][25];
	$pos26einheit = $_POST["einheit"][25];
	$pos26dsc = $_POST["dsc"][25];
	$pos26ep = $_POST["ep"][25];
	$pos26erab = $_POST["poserab"][25];
	$pos26prab = $_POST["posprab"][25];
  $pos27 = $_POST["pos"][26];
	$pos27anz = $_POST["anz"][26];
	$pos27einheit = $_POST["einheit"][26];
	$pos27dsc = $_POST["dsc"][26];
	$pos27ep = $_POST["ep"][26];
	$pos27erab = $_POST["poserab"][26];
	$pos27prab = $_POST["posprab"][26];
  $pos28 = $_POST["pos"][27];
	$pos28anz = $_POST["anz"][27];
	$pos28einheit = $_POST["einheit"][27];
	$pos28dsc = $_POST["dsc"][27];
	$pos28ep = $_POST["ep"][27];
	$pos28erab = $_POST["poserab"][27];
	$pos28prab = $_POST["posprab"][27];
  $pos29 = $_POST["pos"][28];
	$pos29anz = $_POST["anz"][28];
	$pos29einheit = $_POST["einheit"][28];
	$pos29dsc = $_POST["dsc"][28];
	$pos29ep = $_POST["ep"][28];
	$pos29erab = $_POST["poserab"][28];
	$pos29prab = $_POST["posprab"][28];
  $pos30 = $_POST["pos"][29];
	$pos30anz = $_POST["anz"][29];
	$pos30einheit = $_POST["einheit"][29];
	$pos30dsc = $_POST["dsc"][29];
	$pos30ep = $_POST["ep"][29];
	$pos30erab = $_POST["poserab"][29];
	$pos30prab = $_POST["posprab"][29];

//String fuer Update-Anweisung erstellen
$update = "UPDATE rechnungen SET
kunde ='$kunde',
anrede ='$anrede',
datum ='$datum',
zahlungsziel ='$zahlungsziel',
referenz ='$referenz',
zahlungsbedingungen ='$zahlungsbedingungen',
geserab ='$geserab',
gesprab ='$gesprab',
netto ='$netto',
mwst ='$mwst',
brutto ='$brutto',
offen ='$offen',
gezahlt ='$gezahlt',
pos1 ='$pos1',
pos1anz ='$pos1anz',
pos1einheit ='$pos1einheit',
pos1dsc ='$pos1dsc',
pos1ep ='$pos1ep',
pos1erab ='$pos1erab',
pos1prab ='$pos1prab',
pos2 ='$pos2',
pos2anz ='$pos2anz',
pos2einheit ='$pos2einheit',
pos2dsc ='$pos2dsc',
pos2ep ='$pos2ep',
pos2erab ='$pos2erab',
pos2prab ='$pos2prab',
pos3 ='$pos3',
pos3anz ='$pos3anz',
pos3einheit ='$pos3einheit',
pos3dsc ='$pos3dsc',
pos3ep ='$pos3ep',
pos3erab ='$pos3erab',
pos3prab ='$pos3prab',
pos4 ='$pos4',
pos4anz ='$pos4anz',
pos4einheit ='$pos4einheit',
pos4dsc ='$pos4dsc',
pos4ep ='$pos4ep',
pos4erab ='$pos4erab',
pos4prab ='$pos4prab',
pos5 ='$pos5',
pos5anz ='$pos5anz',
pos5einheit ='$pos5einheit',
pos5dsc ='$pos5dsc',
pos5ep ='$pos5ep',
pos5erab ='$pos5erab',
pos5prab ='$pos5prab',
pos6 ='$pos6',
pos6anz ='$pos6anz',
pos6einheit ='$pos6einheit',
pos6dsc ='$pos6dsc',
pos6ep ='$pos6ep',
pos6erab ='$pos6erab',
pos6prab ='$pos6prab',
pos7 ='$pos7',
pos7anz ='$pos7anz',
pos7einheit ='$pos7einheit',
pos7dsc ='$pos7dsc',
pos7ep ='$pos7ep',
pos7erab ='$pos7erab',
pos7prab ='$pos7prab',
pos8 ='$pos8',
pos8anz ='$pos8anz',
pos8einheit ='$pos8einheit',
pos8dsc ='$pos8dsc',
pos8ep ='$pos8ep',
pos8erab ='$pos8erab',
pos8prab ='$pos8prab',
pos9 ='$pos9',
pos9anz ='$pos9anz',
pos9einheit ='$pos9einheit',
pos9dsc ='$pos9dsc',
pos9ep ='$pos9ep',
pos9erab ='$pos9erab',
pos9prab ='$pos9prab',
pos10 ='$pos10',
pos10anz ='$pos10anz',
pos10einheit ='$pos10einheit',
pos10dsc ='$pos10dsc',
pos10ep ='$pos10ep',
pos10erab ='$pos10erab',
pos10prab ='$pos10prab',
pos11 ='$pos11',
pos11anz ='$pos11anz',
pos11einheit ='$pos11einheit',
pos11dsc ='$pos11dsc',
pos11ep ='$pos11ep',
pos11erab ='$pos11erab',
pos11prab ='$pos11prab',
pos12 ='$pos12',
pos12anz ='$pos12anz',
pos12einheit ='$pos12einheit',
pos12dsc ='$pos12dsc',
pos12ep ='$pos12ep',
pos12erab ='$pos12erab',
pos12prab ='$pos12prab',
pos13 ='$pos13',
pos13anz ='$pos13anz',
pos13einheit ='$pos13einheit',
pos13dsc ='$pos13dsc',
pos13ep ='$pos13ep',
pos13erab ='$pos13erab',
pos13prab ='$pos13prab',
pos14 ='$pos14',
pos14anz ='$pos14anz',
pos14einheit ='$pos14einheit',
pos14dsc ='$pos14dsc',
pos14ep ='$pos14ep',
pos14erab ='$pos14erab',
pos14prab ='$pos14prab',
pos15 ='$pos15',
pos15anz ='$pos15qnz',
pos15einheit ='$pos15einheit',
pos15dsc ='$pos15dsc',
pos15ep ='$pos15ep',
pos15erab ='$pos15erab',
pos15prab ='$pos15prab',
pos16 ='$pos16',
pos16anz ='$pos16anz',
pos16einheit ='$pos16einheit',
pos16dsc ='$pos16dsc',
pos16ep ='$pos16ep',
pos16erab ='$pos16erab',
pos16prab ='$pos16prab',
pos17 ='$pos17',
pos17anz ='$pos17anz',
pos17einheit ='$pos17einheit',
pos17dsc ='$pos17dsc',
pos17ep ='$pos17ep',
pos17erab ='$pos17erab',
pos17prab ='$pos17prab',
pos18 ='$pos18',
pos18anz ='$pos18anz',
pos18einheit ='$pos18einheit',
pos18dsc ='$pos18dsc',
pos18ep ='$pos18ep',
pos18erab ='$pos18erab',
pos18prab ='$pos18prab',
pos19 ='$pos19',
pos19anz ='$pos19anz',
pos19einheit ='$pos19einheit',
pos19dsc ='$pos19dsc',
pos19ep ='$pos19ep',
pos19erab ='$pos19erab',
pos19prab ='$pos19prab',
pos20 ='$pos20',
pos20anz ='$pos20anz',
pos20einheit ='$pos20einheit',
pos20dsc ='$pos20dsc',
pos20ep ='$pos20ep',
pos20erab ='$pos20erab',
pos20prab ='$pos20prab',
pos21 ='$pos21',
pos21anz ='$pos21anz',
pos21einheit ='$pos21einheit',
pos21dsc ='$pos21dsc',
pos21ep ='$pos21ep',
pos21erab ='$pos21erab',
pos21prab ='$pos21prab',
pos22 ='$pos22',
pos22anz ='$pos22anz',
pos22einheit ='$pos22einheit',
pos22dsc ='$pos22dsc',
pos22ep ='$pos22ep',
pos22erab ='$pos22erab',
pos22prab ='$pos22prab',
pos23 ='$pos23',
pos23anz ='$pos23anz',
pos23einheit ='$pos23einheit',
pos23dsc ='$pos23dsc',
pos23ep ='$pos23ep',
pos23erab ='$pos23erab',
pos23prab ='$pos23prab',
pos24 ='$pos24',
pos24anz ='$pos24anz',
pos24einheit ='$pos24einheit',
pos24dsc ='$pos24dsc',
pos24ep ='$pos24ep',
pos24erab ='$pos24erab',
pos24prab ='$pos24prab',
pos25 ='$pos25',
pos25anz ='$pos25anz',
pos25einheit ='$pos25einheit',
pos25dsc ='$pos25dsc',
pos25ep ='$pos25ep',
pos25erab ='$pos25erab',
pos25prab ='$pos25prab',
pos26 ='$pos26',
pos26anz ='$pos26anz',
pos26einheit ='$pos26einheit',
pos26dsc ='$pos26dsc',
pos26ep ='$pos26ep',
pos26erab ='$pos26erab',
pos26prab ='$pos26prab',
pos27 ='$pos27',
pos27anz ='$pos27anz',
pos27einheit ='$pos27einheit',
pos27dsc ='$pos27dsc',
pos27ep ='$pos27ep',
pos27erab ='$pos27erab',
pos27prab ='$pos27prab',
pos28 ='$pos28',
pos28anz ='$pos28anz',
pos28einheit ='$pos28einheit',
pos28dsc ='$pos28dsc',
pos28ep ='$pos28ep',
pos28erab ='$pos28erab',
pos28prab ='$pos28prab',
pos29 ='$pos29',
pos29anz ='$pos29anz',
pos29einheit ='$pos29einheit',
pos29dsc ='$pos29dsc',
pos29ep ='$pos29ep',
pos29erab ='$pos29erab',
pos29prab ='$pos29prab',
pos30 ='$pos30',
pos30anz ='$pos30anz',
pos30einheit ='$pos30einheit',
pos30dsc ='$pos30dsc',
pos30ep ='$pos30ep',
pos30erab ='$pos30erab',
pos30prab ='$pos30prab'
WHERE rechnungid = $id";

//MySQL-Anweisung ausfuehren
    mysqli_query($connect, $update);
    echo "<a href='rechnungen_bearbeiten.php>Zur&uuml;ck zur Kunden&uuml;bersicht</a>";
}

?>

</section>

<?php
include '../../inc/footer.php';
?>

</body>
</html>