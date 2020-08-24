<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: darkviolet;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="index.php" class="logo">Dynamic CV</a>
  <div class="header-right">
    
    <a href="view.php">View CV list</a>
    <a href="add.html">Add CV</a>
    <a class="active" href="logout.php">Log Out</a>
  </div>
</div>

<div style="padding-left:20px">
 <?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
  
  <h1 style="text-align:center;"><br><br><br>Hey! <?php echo $_SESSION['name'] ?> </h1>
  <h3 style="text-align:center;">Welcome to Dynamic CV page!</h3>
  <?php	
	} else {
		echo "<h1>You must be logged in.</h1><br/><br/>";
		
	}
	?>
</div>

</body>
</html>







