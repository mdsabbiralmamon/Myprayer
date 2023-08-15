<?php

//from one folder to another ../    but   to enter in a folder ./
include('./model/connection.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prayer Times">
    <meta name="keywords" content="houre, date, api, adhan, Prayer Times, html, css, js, javaScript, Api, الاذان, تصميم المواقع, الساعة, التاريخ, تاريخ اليوم, البلدان ابياي, اوقات الصلاة ,البلدان, المدن,">
    <meta name="author" content="ِahmede achalhi">
    <title>Prayer Times</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <!-- ===== Section Loading Start ===== -->

    <div class="loading">
        <div class="circle"></div>
        <div class="text">loading...</div>
    </div>
    <!-- ===== Section Loading end ===== -->



    <!-- ===== Section Loading Start ===== -->

    <div class="bg-img">
        <img src="img/blue-mosque-istanbul.jpg" alt="">
        <div class="bg-shadow"></div>
    </div>
    <!-- ===== Section Loading end ===== -->

    <!-- ===== Section Navbar Start ===== -->

    <nav class="navbar2">

        <div class="row">
            <div class="open-menu">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </div>
            <ul class="menu">
                <li class="nav-item">
                    <a href="" class="nav-link" data-section="login">
                            Log in
                            <div class="separator"></div>
                        </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" data-section="registration">
                            Registration
                            <div class="separator"></div>
                        </a>
                </li>



            </ul>
        </div>

    </nav>





    <section class="section-contact hidden" id="contact" data-section="registration">
        <div class="container">
            <div class="row">
                <form action='' method='POST'>
                    <h3>Registration</h3>
                    <input autocomplete="off" type="text" id="name" placeholder="Your Name" required name='user_name'>
                    <input autocomplete="off" type="email" id="email" placeholder="Email ID" required name='user_email'>
                    <input autocomplete="off" type="password" id="password" placeholder="password" required name='user_password'>
                    <input autocomplete="off" type="text" id="phone" placeholder="Phone No" required name='user_phone'>
                    <button type="submit" name="user_registration">Register</button>
                </form>
            </div>
        </div>
    </section>
  
    <!-- Code for user Registration  -->
<?php
if(isset($_POST['user_registration']))
{
    //accessing the input field value
    $username=$_POST['user_name'];
    $useremail=$_POST['user_email'];
    $userpassword=$_POST['user_password'];
    $userphone=$_POST['user_phone'];
//selection query

$select_query="select * from `user` where user_name='$username' or user_email='$useremail'";
$result=mysqli_query($con,$select_query);
//checking for duplicate
$rows_count=mysqli_num_rows($result); 
if($rows_count>0){
    echo "<script>alert('User name already exist') </script>";
}
else {

    //inserting
    $register_query="insert into `user` (user_name,user_email,user_password,user_phone) values('$username','$useremail',' $userpassword',' $userphone')";
    $register_execution=mysqli_query($con,$register_query);
}

}
?>

    <section class="section-contact hidden" id="contact" data-section="login">
        <div class="container">
            <div class="row">
                <form action='' method='POST'>
                    <h3>Log In</h3>
                    <input autocomplete="off" type="text" id="name" placeholder="Your Name" required name='user_name'>
                    <input autocomplete="off" type="password" id="password" placeholder="password" required name='user_password'>
                    <button type="submit" name="user_login">Login</button>
                </form>
            </div>
        </div>
    </section>
<!-- Login code  -->
<?php
if(isset($_POST['user_login'])){
    $username=$_POST['user_name'];
    $userpassword=$_POST['user_password'];

// looiing for input user in database
    $select_query="select * from `user` where user_name='$username'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows( $result);
    $row_data=mysqli_fetch_assoc($result);  //fetching specific data
    if($rows_count>0){
        $_SESSION['username']=$username;
        if($userpassword==$row_data['user_password']){
            $_SESSION['username']=$username;
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.open('dash.php','_self')</script>";
        }
        else {
            echo "<script>alert('Invalid Creadentials')</script>";
        }
    }
    else {
        echo "<script>alert('Invalid Creadentials')</script>";
    }
}
 




?>

    <!-- ===== Section contact end ===== -->

    <!-- <script src="https://smtpjs.com/v3/smtp.js"></script> -->
    <script src="script2.js"></script>

    <!-- ===== ionicon link ======-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>