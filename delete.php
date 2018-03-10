<?php
include "connect.php";
$id = $_GET['id'];
$query = "DELETE FROM info WHERE rowid = '$id'";
if ($db->query($query)) {
	header("location: index.php");
}
?>