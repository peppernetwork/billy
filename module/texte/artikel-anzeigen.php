<?php
include '../../inc/header.php';
include '../../inc/nav.php';
?>

  <link href="../../css/table.css" rel="stylesheet" />
  <script src="../../js/artikel-anzeigen.js"></script>

<body>
 <center>
  <div class="container">
   <h2 align="left">Artikel bearbeiten</h2><br />
   <div class="form-group">
    <div class="row-suche">
     <div class="input-suche">
      <input type="text" id="tags" class="form-control" data-role="tagsinput" placeholder="Artikel suchen"/>
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
       <th style:width 25%;>Artikel Nr.</th>
       <th>Artikel</th>
       <th>Beschreibung</th>
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