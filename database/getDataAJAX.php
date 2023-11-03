<?php

include_once "database.php";
include_once "finalDB.php";

$action = $_POST["action"];
// $dbo = new DataBase();
// $dfo = new finalDB();
if ($action == "getData") {
  $dbo = new DataBase();
  $dfo = new finalDB();
  
  $result=$dfo->getAllData($dbo);
  // $result=["from server"];
  $rv=json_encode($result);
  echo $rv;
  exit();
}
?>