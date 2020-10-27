<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/c8.jpg');background-size: cover;background-attachment: fixed; height: 1200px;">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="nav">
				<ul id="a1">
					<li><a href="ahome.php">Home</a></li>
					<li><a href="room.php">Room Update</a></li>
					<li><a href="booking.php">Booking</a></li>
					<li><a href="rd.php">Room Dateils</a></li>
					<li><a href="#">Help</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"><br><br><br><br><br><br><br>
			<center><div id="form">
				<form action="#" method="post">
			<table style="color: black;">
				
				
				<tr>
					<td>Delete Booking customer</td>
					<td><input type="text" name="idno" placeholder="Enter idno" title="Enter ID"></td>
					
				</tr>
				
				<td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit"></td>
				</td>
				
			</table>
		</form>
		<?php
         if(isset($_POST['submit']))
         {
         	$idno=$_POST['idno'];
         
         	if(mysqli_query($a,"delete from f1 where idno=$idno"))
         	{
         		echo "delete succesful";
         	}
         	else
         	{
         		echo "Data Not Deleted";
         	}
         }

		?>
					</div></center>
		</div>
	</div>
	</div>
	
  </div>
</body>

</html>