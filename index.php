<?php
include "connect.php";
$data = "SELECT rowid, * FROM info";
$show = $db->query($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Phonebook</title>
</head>
<body>
	
	<form method="post" action="add.php">
		<input type="text" name="name" placeholder="Name"><br>
		<input type="text" name="number" placeholder="Number"><br>
		<input type="submit" value="ADD">
	</form>
	
	<br>
	
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Number</th>
			<th colspan="2">Option</th>
		</tr>
			<?php while ($row = $show->fetchArray()) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['num']; ?></td>
			<td><a href="edit.php?id=<?php echo $row['rowid']; ?>">Edit</a></td>
			<td><a href="delete.php?id=<?php echo $row['rowid']; ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
		</tr>
			<?php } ?>
	</table>

</body>
</html>