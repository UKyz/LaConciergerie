<?php

$connection = require 'config.php';
$con = $connection();

$id = '';

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'),true);
//$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
//$input = json_decode(file_get_contents('php://input'),true);


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

function sqlGet($con) {
	return mysqli_query($con,"select * from guestbook order by day desc");
}


switch ($method) {
  case 'GET':
    $limit = $_GET['limit'];
    $order = $_GET['order'];
    $sql = "select * from guestbook".($order?" order by $order desc":'').($limit?" limit $limit":'');
    break;
	case 'POST':
		$crud = $input['crud'];
		if ($crud == 'delete') {
			$idDelete = $input['id'];
			$sql = ($idDelete?" delete from guestbook where id = $idDelete":'');
		} elseif ($crud == 'add') {
			$name = $input['name'];
			$email = $input['email'];
			$day = $input['day'];
			$comment = $input['comment'];
			$origin = $input['origin'];
			$sql = ("INSERT INTO guestbook (name, email, day, comment, origin) VALUES ('$name', '$email', '$day', '$comment', '$origin')");
		}
		break;
}

// run SQL statement
$result = mysqli_query($con,$sql);

// die if SQL statement failed
if (!$result) {
  http_response_code(404);
  die(mysqli_error($con));
}

if ($method == 'GET' || $method == 'POST') {
	if ($method == 'POST') {
		$result = sqlGet($con);
	}
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