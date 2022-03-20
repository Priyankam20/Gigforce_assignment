<?php
include("config.php");

$result=mysqli_query($mysql," SELECT * FROM registrations ORDER by id DESC");

?>

<!DOCTYPE html>

<head>
    
    <title>Form</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <form name="form1"action = "function.php" method="POST">
        <div class="container">
            <h1>Create Account</h1>

          
       
            
            <input type="text" placeholder="Enter Name" name="name" id="name"  required>
       
           
            <input type="email" placeholder="Enter Email(username@iitk.ac.in)" name="email" id="email" pattern:".+@iitk.ac.in" required>
          

            
            <input type="text" placeholder="Enter Mobile no." name="mobile" id="mobile" required>
        
            
            <input type="text" placeholder="Enter Address" name="address" id="address" required>

           
        <div class="btn">
            <button type="submit" name="submit" id ="submit" >Submit</button>
        </div>
        
        </div>
    </form>

    <table >
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile no</th>
            <th>Address</th>

        </tr>

    <?php
    while($res=mysqli_fetch_array($result))
    {
        echo '<tr>';
        echo '<td>'.$res['name'].'</td>';
        echo '<td>'.$res['email'].'</td>';
        echo '<td>'.$res['mobile'].'</td>';
        echo '<td>'.$res['address'].'</td>';
        echo '</tr>';
    }
    ?>
      </table>
    
  

    

<script src="index.js"></script>  
</body>

</html>

    