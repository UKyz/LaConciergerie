<?php

$connection = require 'config.php';
$con = $connection();

$id = '';

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
//$input = json_decode(file_get_contents('php://input'),true);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


switch ($method) {
    case 'GET':
        $limit = $_GET['limit'];
        $order = $_GET['order'];
        $sql = "select * from guestbook".($order?" order by $order desc":'').($limit?" limit $limit":'');
        break;
//    case 'POST':
//        $name = $_POST["name"];
//        $email = $_POST["email"];
//        $country = $_POST["country"];
//        $city = $_POST["city"];
//        $job = $_POST["job"];
//
//        $sql = "insert into guestbook (name, email, city, country, job) values ('$name', '$email', '$city', '$country', '$job')";
//        break;
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
    echo json_encode($result);
} else {
    echo mysqli_affected_rows($con);
}

$con->close();