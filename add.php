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
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
    
    $address = mysqli_real_escape_string($mysqli, $_POST['address']);
    
    $telnumber = mysqli_real_escape_string($mysqli, $_POST['telnumber']);
    
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
    
	$nationality = mysqli_real_escape_string($mysqli, $_POST['nationality']);
    
   
    
    $marital=mysqli_real_escape_string($mysqli, $_POST['marital']);
    
	
    $education=mysqli_real_escape_string($mysqli, $_POST['education']);
    
    $skills=mysqli_real_escape_string($mysqli, $_POST['skills']);
    
    $reference=mysqli_real_escape_string($mysqli, $_POST['reference']);
    
    
    
    
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
		$result = mysqli_query($mysqli, "INSERT INTO storedata (name,address,telnumber,email,age,nationality,marital,education,skills,reference) VALUES('$name', '$address','$telnumber','$email','$age','$nationality','$marital','$education','$skills','$reference')");
		?>
		
		 
		<p class="display"><?php echo "Data added successfully.";?></p>
		<a href='index.php'><?php echo "<br/>View Result >>";?></a>
	<?php }
}
?>

</body>
</html>
