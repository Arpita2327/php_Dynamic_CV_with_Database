<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['userid']);
	
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
	} 
    
    else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE storedata SET name='$name',address='$address',telnumber='$telnumber',email='$email',age='$age',nationality='$nationality',marital='$marital',education='$education',skills='$skills',reference='$reference' 
        WHERE userid=$userid");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$userid = $_GET['userid'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM storedata WHERE userid=$userid");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
    $address= $res['address'];
    $telnumber= $res['telnumber'];
    $email = $res['email'];
	$age = $res['age'];
    $nationality= $res['nationality'];
    $marital= $res['marital'];
    $education= $res['education'];
    $skills= $res['skills'];
    $reference= $res['reference'];
	
}
?>
<html>
<head>	
	<title>Edit Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], input[type=tel],input[type=number],input[type=email], select,textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

    h1{
        text-align: center;
        color: darkgray;
        
    }

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

</head>

<body>
	<a href="index.php">Home</a>
	<div class="container">
	
	<form name="form1" method="post" action="edit.php">
	    
	<!-- For name -->
    <div class="row">
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" name="name" placeholder="Write your name.." value="<?php echo $name;?>">
      </div>
    </div>
    
    
    <!-- For Address -->
    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <input type="text" name="address" placeholder="Write your address.." value="<?php echo $address;?>">
      </div>
    </div>
    
    
    <!-- For telnumber -->
    <div class="row">
      <div class="col-25">
        <label for="telnumber">Tel-number</label>
      </div>
      <div class="col-75">
        <input type="text"  name="telnumber" placeholder="Write here.." value="<?php echo $telnumber;?>">
      </div>
    </div>
    
    
    
    
    <!-- for email -->
    <div class="row">
      <div class="col-25">
        <label for="email">E-mail</label>
      </div>
      <div class="col-75">
        <input type="text"  name="email" placeholder="Write your email address.." value="<?php echo $email;?>">
      </div>
    </div>
    
    
    <!-- for age -->
    <div class="row">
      <div class="col-25">
        <label for="date">Age</label>
      </div>
      <div class="col-75">
        <input type="text"  name="age" value="<?php echo $age;?>">
      </div>
    </div>
    
    
    
     <!-- For Nationality -->
    <div class="row">
      <div class="col-25">
        <label for="nationality">Nationality</label>
      </div>
      <div class="col-75">
        <input type="text" name="nationality" placeholder=" Ex:(Bangladeshi,Indian,Filipino)" value="<?php echo $nationality;?>">
      </div>
    </div>
    
      
    
    
    
     <!-- For Marital Status -->
    <div class="row">
      <div class="col-25">
        <label for="marital">Marital Status</label>
      </div>
      <div class="col-75">
        <input type="text"  name="marital" value="<?php echo $marital;?>">
      </div>
    </div>
    
    
    
    
    <!-- for Educational Background -->
    <div class="row">
      <div class="col-25">
        <label for="education">Educational Background</label>
      </div>
      <div class="col-75">
        <input type="text"  name="education"   placeholder="Write here.." style="height:100px" value="<?php echo $education;?>">
      </div>
    </div>
    
    
    <!-- for skills -->
    <div class="row">
      <div class="col-25">
        <label for="skills">Skills</label>
      </div>
      <div class="col-75">
        <input type="text"  name="skills" placeholder="Write here.." style="height:100px" value="<?php echo $skills;?>" >
      </div>
    </div>
    
    
    
  <!-- for References -->
    <div class="row">
      <div class="col-25">
        <label for="reference">References</label>
      </div>
      <div class="col-75">
        <input type="text"  name="reference" placeholder="Write here.." style="height:100px" value="<?php echo $reference;?>">
      </div>
    </div>
      
    
    
    <!-- For submit -->
    <div class="row">
     <input type="hidden" name="userid" value=<?php echo $_GET['userid'];?>>
      <input type="submit" name="update" value="Update">
    </div>
  </form>
</div>


</body>
</html>
