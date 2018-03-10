<?php
include "connect.php";
$id = $_GET['id'];
$data = "SELECT * FROM info WHERE rowid = '$id'";
$show = $db->query($data);
$row = $show->fetchArray();
$name = $row['name'];
$number = $row['num'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>

	<button onclick="window.location='index.php'">Back</button>

	<form method="post" action="update.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>"><br>
		<input type="text" name="name" value="<?php echo $name; ?>"><br>
		<input type="text" name="number" value="<?php echo $number; ?>"><br>
		<input type="submit" value="UPDATE">
	</form>

</body>
</html>