<?php 
$host = "localhost";
$dbname = "myproject";
$user = "root";
$pwd = "";

//Set DSN
$dsn = "mysql:host=".$host.";dbname=".$dbname;
$conn = new PDO($dsn,$user,$pwd);
$stmn = $conn->query("SELECT * FROM students");
$id = 80;
$stmn2 = $conn->query("SELECT id,first_name,address FROM students WHERE id=".$id);
$row = $stmn2->fetch(PDO::FETCH_ASSOC);
$info = [];
// print_r($info);die();
$i=0;
foreach ($row as $key => $value) {
	$info[$key] = $value;
}die(print_r($info));

while($row=$stmn->fetch(PDO::FETCH_OBJ))
{
		$info[$i]['id'] = $row->id;
		$info[$i]['first_name'] = $row->first_name;
		$info[$i]['last_name'] = $row->last_name;
		$info[$i]['address'] = $row->address;
		$i++;
}

print_r($info);

 ?>