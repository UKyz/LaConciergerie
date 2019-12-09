<?php

return function () {
//  error_reporting(E_ERROR | E_PARSE);

  // Victor configuration
  $host = "localhost";
  $user = "root";
  $password = "root";
  $dbname = "laconciergerie";
  $con = mysqli_connect($host, $user, $password, $dbname);

  if (!$con) {
    // Alexia configuration
    $password = "";
    $con = mysqli_connect($host, $user, $password,$dbname);
  }

  if (!$con) {
    // 1and1 configuration
    $host = "db5000231025.hosting-data.io";
    $user = "dbu62777";
    $dbname = "dbs225552";
    $password = "L@conciergerie1";
    $con = mysqli_connect($host, $user, $password,$dbname);
  }

  /* Modification du jeu de résultats en utf8 */
  if (!$con->set_charset("utf8")) {
    printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", $con->error);
    exit();
  }

  return $con;
};

