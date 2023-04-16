<?php 
include "db_conn.php";
include "home.php";


session_start();

if ( isset($_SESSION['user_name'])) {
    
$sql = "SELECT * FROM hospital WHERE cityname = '$cityname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) >0) {

 $row = mysqli_fetch_assoc($result);
 
 $hospital = $row['hospital'];
 $bloodquantity = $row['bloodquantity'];
 $bloodcapacity = $row['bloodcapacity'];
 $Address = $row['Address'];
 $phnumber = $row['phnumber'];
 $alink = $row['alink'];
 $hlink = $row['hlink'];

}



 ?>
  <!DOCTYPE html>
<html>
<head>
	<title>Hospital Details</title>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
			color: #ff4500;
		}
		.container {
			width: 80%;
			margin: 0 auto;
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
		}
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 30px;
		}
		table td, table th {
			padding: 10px;
			border: 1px solid #ddd;
			text-align: left;
			font-size: 28px;
		}
		table th {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
<img src="img.png" alt="">
	
        
        <h1>Blood Banks near you</h1>
        <br>
		<div class="container">
        <table>
			<tr>
				<th>City name</th>
				<td><?php echo $cityname; ?></td>
			</tr>
			<tr>
				<th>Hospital</th>
				<td><?php echo $hospital; ?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?php echo $Address; ?></td>
			</tr>
			<tr>
				<th>Blood Capacity</th>
				<td><?php echo $bloodcapacity; ?></td>
			</tr>
			<tr>
				<th>Blood Quantity</th>
				<td><?php echo $bloodquantity; ?></td>
			</tr>
            <tr>
				<th>Phone Number</th>
				<td><?php echo $phnumber; ?></td>
			</tr>
           
		</table>
	</div>
     <a href="logout.php">Logout</a>
</body>
</html>



<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>
 

