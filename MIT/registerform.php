<?php   
 session_start();
 include("config.php"); //include the config
$db=new mysqli("$dbhost","$dbuser","$dbpass");
$db->select_db("$dbname");

  if(isset($_POST['register']))
  {
   //geting the values from user input form index
   $pn=$_POST['pn'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $code=$_POST['code'];

    $sql1 = "SELECT * FROM Worker WHERE Name='$username'";

    if($code == 1){


    $result = $db->query($sql1);

    //if ($result->num_rows == 0) {
    $sql2="INSERT INTO Worker
    (Name,PhoneNumber,password,BinM,BinAd)
    VALUES ('$username','$pn','$password',0,0)";

    $db->query($sql2);

    //}

   header("location:loginform.php");

    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>WHMS</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
        <link href="styles.css" rel="stylesheet">

    
    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.jpg">
</head>
<body  style="background-image: url('images/header-background.jpg');">
    
    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand" href="index.php"><b>WHMS</b></a> 

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.php">Elma</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Warehouses</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="loginform.php">Login to see warehouses</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginform.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registerform.php">Register</a>
                    </li>

                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

      
    <!-- Header -->
    <header id="header" class="header h-100">
               <div class="container ">
             <div class="row ">
                 <div class="col-lg-3 offset-lg-4 fixed-top"  style=" padding-top: 12%;">
                                        <h1 style="color:white">REGISTER</h1>

                    <form action='registerform.php' method="post" oninput='password2.setCustomValidity(password2.value != password.value ? "Passwords do not match." : "")'>
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="username" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="pn" placeholder="PhoneNumber" required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control-input" name="password" placeholder="Password" required>
                        </div>
                         <div class="form-group">
                            <input type="password" class="form-control-input" name='password2' placeholder="Repeat Password" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="code" placeholder="WorkCode" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="register" class="form-control-submit-button">Register</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div>
    </div> <!-- end of ex-basic-1 -->
    <!-- end of
    </header> <!-- end of header -->
    <!-- end of header -->
   



    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->
        
    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>