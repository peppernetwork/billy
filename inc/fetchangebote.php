<?php

//fetchsuche.php

$connect = new PDO("mysql:host=localhost;dbname=c3billydb", "c3billy", "vssKNpZ_67");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM angebote 
 WHERE angebotid REGEXP '".$search."' 
 OR kunde REGEXP '".$search."' 
 OR referenz REGEXP '".$search."' 
 ";
}
else
{
 $query = "
 SELECT * FROM angebote ORDER BY angebotid
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