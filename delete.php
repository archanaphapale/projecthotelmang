<?php
	include("connection.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Room</title>
</head>
<body>
	<table border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>rno</th>
		</tr>
	</table>
	<?php
	$sql="select *from room";
	$records=mysqli_query($a,$sql);
	
	?>
</body>
</html>