<?php
include '../../inc/header.php';
include '../../inc/nav.php';
?>

  <link href="../../css/table.css" rel="stylesheet" />
  <script src="../../js/zahlungen_offen.js"></script>

<body>

 <center>
  <div class="container">
   <h2 align="left">Offene Zahlungen</h2><br />
    <div class="table-responsive">
     <table class="table table-bordered table-striped">
	  <tbody>
       <thead>
        <tr>
         <th>Rechnung Nr.</th>
         <th>Kunde</th>
	     <th>Zahlungsziel</th>
	     <th>Betrag</th>
	     <th>Gezahlt</th>
	     <th>Offen</th>
	     <th>Zahlung eingeben</th>
        </tr>
       </thead>
      </tbody>
     </table>
    </div>
  </div>
</center>

<?php
include '../../inc/footer.php';
?>

 </body>
</html>