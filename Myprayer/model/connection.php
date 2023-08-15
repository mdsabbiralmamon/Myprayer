<?php

$con=mysqli_connect('localhost','root','','prayer');
if(!$con){
    die(mysqli_error($con));
    //echo " <script>alert('connected SucessFully')  </script>";
}


?>