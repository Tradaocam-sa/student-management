<?php
require_once "database.php";
$dbo=new DataBase();

$tp=1;
$fn=1;
$fp=1;
$tn=1;
$cmd="INSERT INTO `datafinal`(`tp`, `fn`, `fp`, `tn`) VALUES (:tp,:fn,:fp,:tn)";
$stmnt=$dbo->conn->prepare($cmd);
try{
  $stmnt->execute([":tp"=>$tp,":fn"=>$fn, ":fp"=>$fp,":tn"=>$tp ]);
}
catch(Exception $e){
  echo "".$e->getMessage()."<br>";
}



$cmd = "select * from datafinal";
$statement = $dbo->conn->prepare($cmd);
$statement->execute();
$rv=$statement->fetchAll(PDO::FETCH_ASSOC);
print_r($rv);
?>