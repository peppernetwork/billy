<?php

//fetchsuche.php

$connect = new PDO("mysql:host=localhost;dbname=c3billydb", "c3billy", "vssKNpZ_67");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM kunden 
 WHERE Firma REGEXP '".$search."' 
 OR Vorname REGEXP '".$search."' 
 OR Nachname REGEXP '".$search."' 
 OR strasse REGEXP '".$search."' 
 OR plz REGEXP '".$search."' 
 OR ort REGEXP '".$search."'
 ";
}
else
{
 $query = "
 SELECT * FROM kunden ORDER BY ID
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);

?>