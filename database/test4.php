<?php  
require_once("./database.php");
require_once("./finalDB.php");

$dbo = new DataBase();
$dfo = new finalDB();

$rv=$dfo->getAllData($dbo);
print_r($rv);
echo("<br>");

$rv=$dfo->createNewData($dbo, 3,3,3,3);
echo($rv);
echo("<br>");

$rv=$dfo->getAllData($dbo);
print_r($rv);

?>