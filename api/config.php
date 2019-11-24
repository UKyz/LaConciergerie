<?php

return function () {
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

    return $con;
};

