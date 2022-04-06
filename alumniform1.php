<?php
    include ("connect.php");

    $name=$_POST["name"];
    $clgname=$_POST["clgname"];
    $gender=$_POST["gender"];
    $dob=$_POST["dob"];
    $occupation=$_POST["occupation"];
    $compname=$_POST["compname"];
    $oaddress=$_POST["oaddress"];
    $state=$_POST["state"];
    $pin=$_POST["pin"];
    $country=$_POST["country"];
    $paddress=$_POST["paddress"];
    $pstate=$_POST["pstate"];
    $ppincode=$_POST["ppincode"];
    $pcountry=$_POST["pcountry"];
    $nationality=$_POST["nationality"];
    $bloodgroup=$_POST["bloodgroup"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $graduation=$_POST["graduation"];
    $gradyear=$_POST["gradyear"];
    $gpassout=$_POST["gpassout"];
    $masters=$_POST["masters"];
    $myear=$_POST["myear"];
    $mpassout=$_POST["mpassout"];
    $mdiscipline=$_POST["mdiscipline"];
    $doctoral=$_POST["doctoral"];
    $dyear=$_POST["dyear"];
    $dpassout=$_POST["dpassout"];
    $ddisc=$_POST["ddisc"];
    $photo=$_POST["photo"];
    

    $result= "INSERT INTO alumini VALUES (null, '$name', '$clgname' , '$gender', '$dob', '$occupation', '$compname','$oaddress','$state','$pin','$country','$paddress','$pstate','$ppincode','$pcountry','$nationality','$bloodgroup','$email','$phone','$graduation','$gradyear','$gpassout','$masters','$myear','$mpassout','$mdiscipline','$doctoral','$dyear','$dpassout','$ddisc','$photo')";

    $allowed = array('jpg', 'jpeg', 'png');

        if (isset($_POST['submit'])) {

            //photo1
            if(empty($_FILES['photo1'])){
                $photo1 = null;
            }else{

            $filename = $file1['name'];
            $filetemp = $file1['tmp_name'];
        
            $fileExt = explode('.', $filename);
            $fileActualEXt = strtolower(end($fileExt));
        
        
            if (in_array($fileActualEXt, $allowed)) {
                
                        $filenamenew = uniqid('', true) . "." . $fileActualEXt;
                        $photo1 = 'uploads/' . $filenamenew;
                        move_uploaded_file($filetemp, $photo1);
            }
                        
            }

    if(mysqli_query($con, $result))
    {
        echo "<alert>Data stored successfully.";
        header("Location:alumniform.php");
    }
 	else
 	{
 		echo "<h3>Data is not stored.</h3>";
        echo mysqli_error($con);
    }


?>