<?php 
    require ('connect.php');   

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result=mysqli_query($con,"select * from send_email where email = '$email'");
        $row=mysqli_fetch_array($result);

        //    table column name        
        if($row['password']==$password)
	    {
            $_SESSION['email']=$email; //[email]= user submit email
            header("Location:alumniform.php");
        }
        else
        {
            header("location:alumnilogin.php?err=1");
        }
    
    }



?>