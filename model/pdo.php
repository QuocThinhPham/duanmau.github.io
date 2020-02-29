<?php

// function connect(){
$servername = "localhost";
// khai báo biến db sau này nếu muốn thay đổi db thì chỉ cần kiếm biến rồi đổi
$dbname = "streetgang";
$username = "root";
$password = "";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$sql = "set names utf8";
	$conn->exec($sql);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo "Connected successfully";
} catch (PDOException $e) {
	// echo "Connection failed: " . $e->getMessage();
}
// return $conn;
// }
