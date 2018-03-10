<?php
include "connect.php";
$name = $_POST['name'];
$number = $_POST['number'];
$add = "INSERT INTO info(name, num) VALUES ('$name', '$number')";
if ($db->exec($add)) {
	header("location: index.php");
}
?>