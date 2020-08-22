
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        .a{
            text-align: center;
        }
        .displayEcho{
            font-size: 20px;
            text-align: center;
            
            
            
        }
        
        a{
            font-size: 20px;
            background-color: #4CAF50; /* Green */
             border: none;
             color: white;
             padding: 15px 32px;
             
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
        
        .tableecho{
            
            font-size: 20px;
             margin-left: 19%;
            margin-right: 25%;
        }
        h1{
            text-align: center;
        }
        
    
        
        @media screen and (max-width: 300px) {
  .tableecho, .col-75,  input[type=text] {
    width: 100%;
    margin-top: 0;
  }
}
    </style>
</head>
<body>
  
   
    
    <div class="displayEcho"  >    
   <p > <a href="add.html">Add New Data</a></p>
         
    </div>  
    
    
    
    <?php 
	
	
    
  while($res = mysqli_fetch_array($result)) {  
   ?> 
   
  <h1>CV<br><br></h1>
  <table class="tableecho" style="width:100%"  >    
 
   <tr>
  <td> Name </td>
  <td> : </td>
  <td> <?php  echo $res['name'];?> </td>
  </tr>
  
  
  
  <tr>
  <td><br>Address </td>
  <td><br> : </td>
  <td> <br><?php  echo $res['address'];?> </td>
   </tr>
   
  
   
  <tr>
  <td><br>Tel-number </td>
  <td><br> : </td>
  <td> <br><?php  echo $res['telnumber'];?> </td>
  </tr>
  
  
   <tr>
  <td><br>E-mail </td>
  <td><br> : </td>
  <td><br> <?php  echo $res['email'];?> </td>
  </tr>
  
  
  
  <tr>
  <td><br>Age </td>
  <td><br> : </td>
  <td><br> <?php  echo $res['age'];?> </td>
  </tr>
 
  <tr>
  <td><br>Nationality  </td>
  <td><br> : </td>
  <td><br> <?php  echo $res['nationality'];?> </td>
 </tr>
 
 
  <tr>
  <td><br>Marital Status </td> 
  <td><br> : </td>
  <td><br> <?php  echo $res['marital'];?> </td>
 </tr>

 <tr>
  <td><br>Educational Backgraound  </td>
  <td><br> : </td>
  <td><br> <?php  echo $res['education'];?> </td>
   </tr>
   
  
 <tr>
  <td><br>Skills  </td>
  <td><br> : </td>
  <td><br> <?php  echo $res['skills'];?> </td>
  </tr>
 
 <tr>
  <td><br>Refference  </td>
  <td><br> : </td>
  <td><br> <?php  echo $res['reference'];?> </td>
  
 </tr>
      
      
          
          
          

  
   </table>
   <div class="a">
   <?php  echo "<br>";?>
   <?php  echo "<br>";?>
   <?php  echo "<br>";?>
   <a class="edit" href=<?php  echo "\"edit.php?
      userid=$res[userid]\">Edit</a>";?> 
      
      
    <a class="delete" href=<?php echo "\"delete.php?userid=$res[userid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";	?>
  
   <?php  echo "<br>";?>
   <?php  echo "<br>";?>
       <?php  echo "<br>";?>
   <?php  echo "<br>";?>
   <?php  echo "<br>";?>
   <?php  echo "<br>";?>
   </div>
    <?php  
  }
	?>
   
        
</body>
</html>

