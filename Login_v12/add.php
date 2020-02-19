<!DOCTYPE html>
<html>
<head>
<title>ADD</title>
<link rel="icon" href="images/logo1.jpg">
</head>
<body>
	<div>
		<form method="POST" action="insert.php">
			<label>Firstname:</label><input type="text" name="firstname">
			<label>Lastname:</label><input type="text" name="lastname">
			<label>E-mail:</label><input type="email" name="email">
			<label>Phone Number:</label><input type="tel" name="phonenumber">
			<label>Message:</label><input type="text" name="message">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>E-mail</th>
				<th>Phone Number</th>
				<th>Message</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `requests`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['firstname']; ?></td>
							<td><?php echo $row['lastname']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['phonenumber']; ?></td>
							<td><?php echo $row['message']; ?></td>
							<td>
								<a href="edit.php">Edit</a>
								<a href="delete.php">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>