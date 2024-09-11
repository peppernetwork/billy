$(document).ready(function(){
 
 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"../../inc/fetchzahlungen_offen.php",
   method:"POST",
   data:{query:query},
   dataType:"json",
   success:function(data)
   {
    $('#total_records').text(data.length);
    var html = '';
    if(data.length > 0)
    {
     for(var count = 0; count < data.length; count++)
     {
      html += '<tr>';
      html += '<td> <center><input class="ButtonSelect" type="submit" name="auswahl" formaction="../zahlungen/zahlung_eingeben.php?var=value" value='+data[count].rechnungid+'></form></center></td>';
      html += '<td>'+data[count].kunde+'</td>';
      html += '<td>'+data[count].zahlungsziel+'</td>';
      html += '<td>'+data[count].brutto+'</td>';
      html += '<td>'+data[count].gezahlt+'</td>';
      html += '<td>'+data[count].offen+'</td>';
      html += '<td> <center><form method="get"><input class="ButtonSelect" type="submit" name="auswahl" formaction="../zahlungen/zahlung_eingeben.php?var=value" value='+data[count].rechnungid+'></form></center></td></tr>';
     }
    }
    else
    {
     html = '<tr><td colspan="5">Kein Eintrag gefunden</td></tr>';
    }
    $('tbody').html(html);
   }
  })
 }

 $('#search').click(function(){
  var query = $('#tags').val();
  load_data(query);
 });

});
