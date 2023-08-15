<?php
//session_start();
include('./model/connection.php');
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

    <i> welcome <?php echo" testing"  ?> </i>

    <!-- ===== Section Loading Start ===== -->

    <div class="bg-img">
        <img src="img/blue-mosque-istanbul.jpg" alt="">
        <div class="bg-shadow"></div>
    </div>
    <!-- ===== Section Loading end ===== -->

    <!-- ===== Section Navbar Start ===== -->

    <nav class="navbar">

        <div class="row">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="open-menu">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </div>
            <ul class="menu">
                <div class="close-menu">
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </div>
                <li class="nav-item">
                    <a href="" class="nav-link active" data-section="home">
                        Home
                        <div class="separator"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" data-section="place">
                        country
                        <div class="separator"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" data-section="prayer-times">
                        Prayer times
                        <div class="separator"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" data-section="activity">
                       Activity
                        <div class="separator"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link"  onClick='goback()'>
                    Logout
                        <div class="separator"></div>
                    </a>
                </li>
               

            </ul>
        </div>
    </nav>

    <!-- ===== Section Navbar End ===== -->
    <!-- ===== Section Home Start ===== -->

    <section class="section-home" data-section="home">
        <div class="container">
           
            <div class="row">

                <div class="electronic-watch">
                    <span></span>
                </div>
                <div class="clock">
                    <div class="num">
                        <span class="num-1">12</span>
                        <span class="num-2">3</span>
                        <span class="num-3">6</span>
                        <span class="num-4">9</span>
                    </div>
                    <div class="hour">
                        <div class="hr" id="hr"></div>
                    </div>
                    <div class="minut">
                        <div class="mn" id="mn"></div>
                    </div>
                    <div class="second">
                        <div class="sc" id="sc"></div>
                    </div>
                </div>
                <div class="date-new">
                </div>

            </div>
        </div>
    </section>

    <!-- ===== Section Home End ===== -->



    <!-- ===== Section Plase Start ===== -->

    <section class="section-place hidden" id="place" data-section="place">
        <div class="container">
            <div class="row">

                <div class="choice">

                    <div class="search-country">
                        <h3 class="choice-country" id="country">your county</h3>
                        <input autocomplete="off" type="text" class="input-focus" id="search-country" placeholder="Find your country" onkeyup="searchCountry()">
                    </div>

                    <div class="search-city">
                        <h3 class="choice-city" id="city">your city</h3>
                        <input type="text" autocomplete="off" class="input-focus" id="search-city" placeholder="Find your city" onkeyup="searchCity()">
                    </div>

                </div>

                <div class="country-city">

                    <div class="content-country country-item" id="hidden-country">

                    </div>

                    <div class="content-city city-item" id="hidden-city">

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ===== Section Place End ===== -->


    <!-- ===== Section Prayer times Start ===== -->


    <section class="section-prayer-times hidden" id="prayer-times" data-section="prayer-times">
        <div class="container">
            <div class="row">
                <div class="date-day-years">
                    <p>choice your country and city</p>
                </div>
                <h1>Prayer times</h1>
                <div class="prayer-times">
                    <ul class="prayer">
                        <li>Israk</li>
                        <li>Fajr</li>
                        <li>Sunrise</li>
                        <li>Dhuhr</li>
                        <li>Asr</li>
                        <li>Sunset</li>
                        <li>Maghrib</li>
                        <li>Isha</li>
                        <li>Firstthird</li>
                        <li>Midnight</li>
                        <li>Lastthird</li>
                    </ul>
                    <ul class="times">
                        <li>5:00M</li>
                        <li>5:00M</li>
                        <li>5:00M</li>
                        <li>5:00M</li>
                        <li>5:00M</li>
                        <li>5:00M</li>
                        <li>5:00M</li>
                        <li>5:00M</li>
                        <li>5:00M</li>
                        <li>5:00M</li>
                        <li>5:00M</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- ===== Section Prayer times End ===== -->
    <!-- ===== Section activity start ===== -->

    <section class="section-contact hidden" id="contact" data-section="activity">
        <div class="container">
            <div class="row">
                <form action='' method='POST'>
                    <h3>My Daily Activity</h3>
                    <input autocomplete="off" type="text" id="name" placeholder="Add Your Acivity" required     name='user_activity'>
                   
                   <!-- code for todolist  -->
                   <?php
                   $select_activity="select * from `user_work`";
                   $activity_execution=mysqli_query($con,$select_activity);
                   $my_activity=mysqli_fetch_assoc($activity_execution);//fetching the actual data
                   while($my_activity=mysqli_fetch_assoc($activity_execution)){
                     $activity= $my_activity['user_activity'];
                     echo "<p style='color: white; box-shadow: 0 0 5px 1px rgb(220, 166, 18), 0px 0px 5px 1px rgb(236, 207, 207); padding:10px;'> $activity </p>";
                   }
                   
               
                         ?>

                    <button type="submit" name="user_act">Add</button>
                </form>
            </div>
        </div>
    </section>
   <!-- code for todo list  -->
    <!-- Code for user Registration  -->
<?php
if(isset($_POST['user_act']))
{
    //accessing the input field value
    $useractivity=$_POST['user_activity'];
    //inserting
    $activity_query="insert into `user_work` (user_activity) values('$useractivity')";
    $activity_execution=mysqli_query($con,$activity_query);
 if ( $activity_execution){
    echo "<script>alert('activity added successfully') </script>";
 }
 else {
    echo("mysqli_error($activity_execution)");
 }
}
?>
    <!-- ===== Section contact end ===== -->

    <!-- <script src="https://smtpjs.com/v3/smtp.js"></script> -->
    <script src="script.js"></script>
    <script> 
const goback = () => {
    
    window.open('index.php', '_self')
    alert('Logout sucessful')
}
    </script>
    <!-- ===== ionicon link ======-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>