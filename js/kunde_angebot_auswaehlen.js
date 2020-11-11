$(document).ready(function(){
 
 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"../../inc/fetchkunden.php",
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
      html += '<td> <center><form method="get"><input class="ButtonSelect" type="submit" name="auswahl" formaction="angebot_erstellen.php?var=value" value="'+data[count].id+'"></form></center> </td>';
      html += '<td>'+data[count].firma+'</td>';
      html += '<td>'+data[count].vorname+' '+data[count].nachname+'</td>';
      html += '<td>'+data[count].strasse+' <br> '+data[count].plz+' '+data[count].ort+'</td>';
      html += '<td>'+data[count].tel+'</td>';
      html += '<td>'+data[count].fax+'</td>';
      html += '<td>'+data[count].mobil+'</td>';
      html += '<td>'+data[count].email+'</td>';
      html += '<td>'+data[count].ust+'</td>';
      html += '<td>'+data[count].steuernr+'</td></tr>';
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
