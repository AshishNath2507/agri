

<?php 

    session_start();
    require ("connect.php");

    $name = $_POST["uname"];
    $pswd = $_POST["pswd"];

    $result = mysqli_query($con, "select * from admin where uname = '$name'");
    $row = mysqli_fetch_array($result);

    if($row['pswd'] == $pswd) {
        $_SESSION['uname'] = $uname;
        header("Location:adminpanel/index.php");
    }
    else{
        header("Location:demo.php");
    }


?>    