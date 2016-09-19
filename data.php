<?php 
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";

$sql="SELECT * FROM employee";
$result = $conn->query($sql);
?>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Address</th>
	</tr>
	<?php foreach ($result as $row): ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			
		</tr>
	<?php endforeach; ?>
</table>
