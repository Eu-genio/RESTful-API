<?php 

include 'conn.php';
// $json = '["geeks", "for", "geeks"]'; 
// $data = json_decode($json); 
//from cs230 links https://www.leaseweb.com/labs/2015/10/creating-a-simple-rest-api-in-php/
$method= $_SERVER['REQUEST_METHOD'];

$input = file_get_contents('php://input'); // this is the data sent from AJAX.
$input = json_decode($input);
file_put_contents('data.json', $input);

$array = array();

//for iterating thorugh the json object and inserting it into an array that i can use https://stackoverflow.com/questions/4731242/php-loop-through-json-array

	foreach($input as $key => $jsons){
	 	foreach($jsons as $key => $value){
	 	
	 	$array[$key] = $value;
	 
	 	}
	 }

if($method == 'POST'|| $method == 'PUT'){
	$id = $array['id'];
	$name = $array['name'];
	$date = $array['date'];
	$url = $array['url'];
	$desc = $array['desc'];
}
if($method == 'DELETE' || $method == 'GET'){
	$id = $array['id'];
}

//switch method from https://www.leaseweb.com/labs/2015/10/creating-a-simple-rest-api-in-php/
switch ($method) {
	case'POST':
	$sql = "INSERT INTO  rest (id,name,theDate,url,description) values ('$name','$date','$url','$desc');"; break;
	case 'PUT':
	$sql = "UPDATE rest set Name = '$name', URL = '$url', description = '$desc' where ID = '$id';"; break;
	case 'GET':
	$sql = "SELECT * FROM rest WHERE if='$id';"; break;
	case 'DELETE':
	$sql = "DELETE FROM rest WHERE if = '$id';"; break;
}
$result = mysqli_query($conn,$sql) or die(mysqli_error());

