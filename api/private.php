<?php
$connection = require 'config.php';
$con = $connection();

$id = '';

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


switch ($method) {
//    case 'GET':
//        $id = $_GET['id'];
//        $sql = "select * from services".($id?" where id=$id":'');
//        break;
    case 'POST':
        $username = $input['username'];
        $password = $input['password'];

        $sql = "select * from users where username='$username' and password='$password'";

//        $sql = "insert into services (name, email, city, country, job) values ('$name', '$email', '$city', '$country', '$job')";
        break;
}

// run SQL statement
$result = mysqli_query($con,$sql);

// die if SQL statement failed
if (!$result) {
    http_response_code(404);
    die(mysqli_error($con));
}

if ($method == 'GET') {
    if (!$id) echo '[';
    for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
        echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
    }
    if (!$id) echo ']';
} elseif ($method == 'POST') {
    if (!$id) echo '[';
    for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
        echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
    }
    if (!$id) echo ']';
} else {
    echo mysqli_affected_rows($con);
}

$con->close();