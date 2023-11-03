<?php
require_once "database.php";


class finalDB{
  public function getAllData($dbo){
    $cmd="SELECT * FROM datafinal";

    $statement=$dbo->conn->prepare($cmd);
    $statement->execute();
    $rv=$statement->fetchAll(PDO::FETCH_ASSOC);
    return $rv;
  }

  public function createNewData($dbo, $tp, $fn, $fp, $tn){
  $cmd= "INSERT INTO datafinal(tp,fn,fp,tn) VALUES (:tp, :fn, :fp, :tn)";
  $statement=$dbo->conn->prepare($cmd);
  try{
    $statement->execute([":tp"=>$tp,
                        ":fn"=>$fn,
                        ":fp"=>$fp,
                        ":tn"=>$tn]);
    return 1;

  }
  catch(Exception $e){
    return 0;
  } 
  }
}
?>