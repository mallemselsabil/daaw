<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-
	scale=1.0">
	<title> All Products Book - Read a Book</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="navbar">
	     <div class="logo">
		<img src="images/logo2.png" width="125px">
	</div>
	<nav>
		<ul id="MenuItems">
			<li><a href="">Home</a></li>
			<li><a href="">Books</a></li>
			<li><a href="">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="">Account</a></li>
		</ul>
	</nav>
	<img src="images/icon1.jpg" width="30px" height="30px">
	<img src="images/rd.jpg" class="menu-icon" width="300px" height="30px"
     onclick="menutoggle()">
	</div>
</div>
<!----------account page-------->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/image1.jpg" width="100%">
            </div>
            <div class="col-2">
                <div class="from-container">
                    <div class="from-btn">

                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form id="LoginForm"  action="login.php" method="post">
                    
                        <input type="text" placeholder="Username" name="username">
                        <input type="password" placeholder="Password" name="password">
                              <?php 
                                        if(isset($_SESSION['info'])){
                                        echo $_SESSION['info'];
                                    }
                       ?> 
                        <button type="submmit" class="btn">Login</button>
                        <a href="">Forgot password</a>
                    </form>
                    <form id="RegForm"  method="post" action="register.php">
                         <?php 
                                        if(isset($_SESSION['added'])){
                                        echo $_SESSION['added'];
                                    }
                       ?> 
                        <input type="text" placeholder="Username" name="username">
                        <input type="email" placeholder="Email" name="email">
                        <input type="password" placeholder="Password" name="password">
                        <button type="submmit" class="btn">Register</button>
                    </form>
                    
                </div>
            </div>

        </div>
    </div>
</div>




<!-------- footer------------>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Dowload Our App</h3>
                <p>Dowload app for Android and ios mobile phone.</p>
                 <div class="app-logo">
                    <img src="images/play.png">
                 </div>
            </div>
            <div class="footer-col-2">
                <img src="images/appStor.png">
                <p>Dowload app for Android and ios mobile phone.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Plicy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
            
        </div>
        <hr>
        <p class="copyright"> By me Selsabil-Mallem 2020 </p>
        
    </div>
</div>
<!------js for toggle menu------->
<script>
	var MenuItems = document.getElementById("MenuItems");
	MenuItems.style.maxHeight ="0px";
	function menutoggle(){
		if(MenuItems.style.maxHeight ="0px")
		{
			MenuItems.style.maxHeight ="200px";
		}
		else
		{
			MenuItems.style.maxHeight ="0px";
		}
	}
</script>
<!------js for toggle Form------->


 <script>
     var  LoginForm =document.getElementById("LoginForm");
           RegForm =document.getElementById("RegForm");
           var Indicator=document.getElementById("Indicator");

             function register(){

                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";

             }
              function login(){

                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";

             }
 </script>




</body>
</html>