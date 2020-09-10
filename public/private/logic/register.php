<?php

require_once("../db.php");

try{

    if(count($_POST) > 0){
        $sql == "INSERT INTO User(".implode(array_keys($_POST),",").") VALUES(".implode(array_keys($_POST),":").")";

        $stmt = $db->prepare($sql);
    foreach ($_POST as $var => $value){
        $stmt-> bindParam(':'.$var,$value);
    }
    $stmt->execute();
    header("Location: /index.php");
    }



} catch(exception $e) {

    die('Erreur '.$e->getMessage());

  }



?>