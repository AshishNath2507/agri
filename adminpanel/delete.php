<?php
    require ('../connect.php');
    
   
        $sl=$_GET['slno'];

        $result = "DELETE FROM alumini WHERE slno='$sl'";

            if (mysqli_query($con, $result)) {
                echo "<h3>Data deleted in the database successfully Please browse phpMyAdmin</h3>";
                header("Location: alumnicontrol.php");
            } else {
                echo "<h3>Data is not stored.</h3>";
                echo mysqli_error($con);
        }
    
?>    
