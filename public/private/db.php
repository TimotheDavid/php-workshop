 

<?php

  try {

    $db = new PDO('mysql:host=localhost; dbname=tutomysql', 'tim', 'timdav');
  }


  catch(exception $e) {

    die('Erreur '.$e->getMessage());

  }
?>