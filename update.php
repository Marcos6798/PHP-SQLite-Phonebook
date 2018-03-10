<?php
include "connect.php";
$id = $_POST['id'];
$name = $_POST['name'];
$number = $_POST['number'];
$query = "UPDATE info SET name = '$name', num = '$number' WHERE rowid = '$id'";
if ($db->exec($query)) {
	header("location: index.php");
}
?>