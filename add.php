<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>



<html>
<head>
	<title>Add Data</title>
	<style>
        addDis{
            text-align: center;
           
            
        }
    
        a{
             text-align: center;
             color: blueviolet;
             border: none;
             font-size: 40px;
             
             
             text-decoration: none;
             
             
             cursor: pointer;
            
        }
        .display{
            color:green;
            font-size: 50px;
            
            margin: 50px auto;
        }
        
        
    </style>
</head>

<body>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$name =  $_POST['name'];
    
    $address =$_POST['address'];
    
    $telnumber = $_POST['telnumber'];
    
    $email = $_POST['email'];
    
	$age = $_POST['age'];
    
	$nationality = $_POST['nationality'];
    
   
    
    $marital=$_POST['marital'];
    
	
    $education= $_POST['education'];
    
    $skills=$_POST['skills'];
    
    $reference=$_POST['reference'];
    $loginId = $_SESSION['userid'];
    
    
    
	// checking empty fields
	if(empty($name)  || empty($telnumber) || empty($email)||empty($age) ||empty($nationality) ||empty($marital) || empty($education)|| empty($skills) || empty($reference)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
        
        
		if(empty($address)) {
			echo "<font color='red'>field is empty.</font><br/>";
		}
        
        
        if(empty($telnumber)) {
			echo "<font color='red'> field is empty.</font><br/>";
		}
        
        if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
        
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		
        
        if(empty($nationality)) {
			echo "<font color='red'>field is empty.</font><br/>";
		}
        
        if(empty($marital)) {
			echo "<font color='red'>field is empty.</font><br/>";
		}
        
        if(empty($education)) {
			echo "<font color='red'>field is empty.</font><br/>";
		}
        
        if(empty($skills)) {
			echo "<font color='red'>field is empty.</font><br/>";
		}
        
        if(empty($reference)) {
			echo "<font color='red'>field is empty.</font><br/>";
		}
        
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'><=Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO storedata (name,address,telnumber,email,age,nationality,marital,education,skills,reference, login_id) VALUES('$name', '$address','$telnumber','$email','$age','$nationality','$marital','$education','$skills','$reference', '$loginId')");
		?>
		
		 
		<p class="display"><?php echo "Data added successfully.";?></p>
		<a href='view.php'><?php echo "<br/>View Result >>";?></a>
	<?php }
}
?>

</body>
</html>
