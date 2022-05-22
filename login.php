<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <title>Government Higher Sceondary School Lawa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
<!--    css-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--    external css-->
    <link href="ghss.css" rel="stylesheet" type="text/css">
  <!-- frontawesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
        <div class="continer-flud bg-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-fluid logo" src="image/logon.jpg" alt="logo image" >
                </div>
                <div class="col-sm-4">
                    <h11 class="logo-head" >Govenment Higher Secondary School Lawa</h11>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-theme">
  <img class="img-fluid logo" src="image/logon.jpg" alt="logo image" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admission
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="admission.php">Admission Processer</a>
          <a class="dropdown-item" href="login.php">Apply Online</a>
        </div>
      </li> 
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          course
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="class6.php">Class 6th</a>
          <a class="dropdown-item" href="class7.php">Class 7th</a>
          <a class="dropdown-item" href="class8.php">Class 8th</a>
          <a class="dropdown-item" href="class9.php">Class 9th</a>
          <a class="dropdown-item" href="class10.php">Class 10th</a>
          <a class="dropdown-item" href="class11.php">Class 11th</a>
          <a class="dropdown-item" href="class12.php">Class 12th</a>
        </div>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gallary
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="photo.php">Photos</a>
        </div>
      </li> 
         <li class="nav-item active">
        <a class="nav-link" href="facilities.php">Facilicies</a>
      </li>
         <li class="nav-item active">
        <a class="nav-link" href="about%20us.php">About Us</a>
      </li>
         <li class="nav-item active">
        <a class="nav-link" href="contact-us.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Enter Your Userame" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter Your Password">
  	</div>

  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
    
        <br>
        <br>
        <br>
    
        <br>
        <br>
    
<!--    footer-->
     <div class="container-fluid footer">
        <div class="container">
        <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <span>Designed with by ghss lawa.com </span>
                        </div>
                        <div class="col-sm-6">
                            <span> 2016. All Right Reserved.</span>
                        </div>
                    </div>
                        
                </div>
                <div class="col-sm-6">
                    <div class="row">
                    <div class="col-sm-3">
                            <span>About Us</span>
                        </div>
                    <div class="col-sm-4">
                            <span>Admission procedures</span>
                        </div>
                    <div class="col-sm-2">
                            <span>Photo</span>
                        </div>
                    <div class="col-sm-3">
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
<!--    js file-->
<script src="js/bootstrap.min.js"></script>    
    <script>
        window.onscroll = function(){myFunction()}
         var ul = document.getElementById("ul");
        var stricky = ul.offsetTop;
        
        Function myFunction(){
            if(window.pageYOffset >= stricky){
                ul.classList.add("sticky");
            }
            else{
                ul.classList.remove("sticky");
            }
        }
    
    </script>
    
 
</body>
</html>