<?php
include("connection.php")
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Home (hotel management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/download.jpg" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/s1.jpg'); height: 1200px;">
		<div id="header">
			<div id="logo">
				<h1><font color="white"> My project</font></h1>
			</div>
			  <div id="cl"><input type="button" name="btn" id="btn"></div>
			<div id="nav">
					<ul>
					<li><a href="ahome.php">HOME</a></li>
					<li><a href="room.php">Room Update</a></li>
					<li><a href="booking.php">Booking</a></li>
					<li><a href="rd.php">Room Details</a></li>
					<li><a href="a">HELP</a></li>
				</ul>
			</div>
		</div>
	   <div id="banner">
	   	<center><div id="form">
	   		<form action="room.php" method="post">
	   	<table style="color: black">
	   	
	   		<tr>
	   			<td>Room no</td>
	   			<td><input type="text" name="rno" placeholder="Enter Room no" title="Enter Room no"></td>
	   			
	   		</tr>
	   		<tr>
	   			<td>Room type</td>
	   			<td><input type="text" name="type" placeholder="Enter Room type" title="Enter Room type"></td>
	   			
	   		</tr>

	   	<tr>
	   			<td>Room Price</td>
	   			<td><input type="text" name="price" placeholder="Enter Room Price" title="Enter Room Price"></td>
	   			
	   		</tr>
	   		
	   		<tr>
	   			<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit"></td>
	   		</tr>
	   	</table>
	   	</form>
	   	<?php
	   	if(isset($_POST['submit']))
	   	{
	   		$rno=$_POST['rno'];
	   		$type=$_POST['type'];
	   		$price=$_POST['price'];
	   		  if (mysqli_query($a,"insert into room(rno,type,price) value('$rno','$type','$price')")) 
	   		  {
	   		  	echo "data insert";
	   		  }
	   		  else
	   		  {
	   		  	echo "data not insert";
	   		  }
	   	}

	   	?>
	   </div>
	   </center>
	   </div>
	   	
	   </div>

</body>

</html>