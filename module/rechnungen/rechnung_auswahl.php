<?php
include '../../inc/header.php';
include '../../inc/nav.php';
?>

  <link href="../../css/style.css" rel="stylesheet" />
  <script src="../../js/kunde_angebot_auswaehlen.js"></script>

<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

<body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="row">
  <div class="column" >
    <center>
    <form>
    <a href="../../module/rechnungen/rechnung_kunde_auswaehlen.php"><input type="button" class="button4" value="Neue Rechnung erstellen">
    </form>
    </center>
  </div>
  <div class="column">
    <center>
    <form>
    <a href="../../module/rechnungen/rechnung_aus_angebot.php"><input type="button" class="button4" value="Angebot aus Rechnung">
    </form>
    </center>
  </div>
</div>


<?php
include '../../inc/footer.php';
?>

 </body>
</html>