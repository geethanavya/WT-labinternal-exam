<?php 
 $servername="localhost";
        $username="root";
        $password="";
        $retype="";
        $db="userfeed";
        $conn=mysqli_connect($servername,$username,$password,$retype) or die('Connection failed:'.mysqli_error());
        mysqli_select_db($conn,$db);
    mysqli_connect();
?>
