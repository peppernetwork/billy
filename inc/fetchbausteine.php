<?php

//fetchartikel.php

$connect = new PDO("mysql:host=localhost;dbname=c3billydb", "c3billy", "vssKNpZ_67");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM bausteine
 WHERE bausteinid REGEXP '".$search."' 
 OR bausteinname REGEXP '".$search."' 
 OR bausteinbeschreibung REGEXP '".$search."' 
 ";
}
else
{
 $query = "
 SELECT * FROM bausteine ORDER BY bausteinid
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