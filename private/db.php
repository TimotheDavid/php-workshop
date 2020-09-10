 

<?php

  try {

    $db = new PDO('mysql:host=localhost; dbname=mysql-workbench', 'tim', 'timdav');
    echo "ok";
  }


  catch(exception $e) {

    die('Erreur '.$e->getMessage());

  }



?>