 

<?php

  try {

    $db = new PDO('mysql:host=localhost; dbname=tutomysql', 'tim', 'timdav');
    echo "ok";
  }


  catch(exception $e) {

    die('Erreur '.$e->getMessage());

  }



?>