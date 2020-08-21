
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM storedata ORDER BY userid DESC"); // using mysqli_query instead
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .a{
            text-align: center;
        }
        .displayEcho{
            font-size: 20px;
            
            box-sizing: content-box;  
            
            
        }
        
        a{
            font-size: 20px;
            background-color: #4CAF50; /* Green */
             border: none;
             color: white;
             padding: 15px 32px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
             margin: 4px 2px;
             cursor: pointer;
            text-align: center;
        }
        .edit{
          background-color: #008CBA;
          
        }
        
        .delete{
            background-color: #f44336;
        }
        
        input[type=text]{
             margin: 4px 2px;
        }
    
    </style>
</head>
<body>
  
   
    
    
    
    
    
    <?php 
	
	
    
  while($res = mysqli_fetch_array($result)) {  
   ?> 
   <div class="a">
<div class="displayEcho"  >      
   
   <p class="name">Name: <?php  echo $res['name'];?></p>
   
   <p class="address">Address: <?php  echo $res['address'];?></p>
  
   
  
   <p class="telnumber">Tel-number: <?php  echo $res['telnumber'];?></p>
  
  
   
   <p class="email">E-mail: <?php  echo $res['email'];?></p>
  
  
   <p class="age">Age: <?php  echo $res['age'];?></p>
  
   
  
  <p class="nationality">Nationality:  <?php  echo $res['nationality'];?></p>
 
 
  
  <p class="marital">Marital Status:  <?php  echo $res['marital'];?></p>
 
 
  <p class="education">Educational Backgraound:  <?php  echo $res['education'];?></p>
 
   
 
  <p class="skills">Skills:  <?php  echo $res['skills'];?></p>
 
 
 
  <p class="reference">Refference:  <?php  echo $res['reference'];?></p>
  
   
   <?php  echo "<br>";?>
   <a class="edit" href=<?php  echo "\"edit.php?
      userid=$res[userid]\">Edit</a>";?> 
      
      
    <a class="delete" href=<?php echo "\"delete.php?userid=$res[userid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";	?>
  
   <?php  echo "<br>";?>
   
   </div>
    <?php  
  }
	?>
     
   <p > <a href="add.html">Add New Data</a></p>
         
    </div>  
        
</body>
</html>

