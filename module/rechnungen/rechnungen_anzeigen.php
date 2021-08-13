<?php
include '../../inc/header.php';
include '../../inc/nav.php';
?>

  <link href="../../css/table.css" rel="stylesheet" />
  <script src="../../js/kunden_rechnung_anzeigen_bearbeiten.js"></script>

<body>
 <center>
  <div class="container">
   <h2 align="left">Rechnung ausw&auml;hlen</h2><br />
   <div class="form-group">
    <div class="row-suche">
     <div class="input-suche">
      <input type="text" id="tags" class="form-control" data-role="tagsinput" placeholder="Rechnung suchen"/>
     </div>
     <div class="input-submit">
      <button type="button" name="search" class="button3" id="search">Suchen</button>
     </div>
    </div>
   </div>
   <br />

   <div class="table-responsive">
    <div align="right">
     <p><b>Suchergebnisse: <span id="total_records"></span></b></p>
    </div>

    <table class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Rechnung Nr.</th>
       <th>Kunde</th>
       <th>Referenz</th>
      </tr>
     </thead>
     <tbody>
     </tbody>
    </table>
   </div>
  </div>
  <div style="clear:both"></div>
  <br />
</center>
  
<?php
include '../../inc/footer.php';
?>

 </body>
</html>