<?php
include("config.php");
?>
<?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];

        $result = mysqli_query($mysql, "INSERT into registrations values('','$name','$email','$mobile','$address')");
        if($result)
        {
            header("location:insert.php");
        }
        else{
            echo "Failed";
        }


    }
    ?>
  

