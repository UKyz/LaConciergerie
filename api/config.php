<?php

return function () {
    $host = "localhost";
    $user = "root";
    $password = "root";
    $dbname = "laconciergerie";

    $con = mysqli_connect($host, $user, $password, $dbname);

    if (!$con) {
        $password = "";
        $con = mysqli_connect($host, $user, $password,$dbname);
    }

    return $con;
};

