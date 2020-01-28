<?php include 'cms/db.php'; ?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>At Your Door Step</title>
    <!--this is arvo font-->
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    
      .dropdown  {
  padding-top: 15px;
}
.dropdown a {
    text-decoration: none;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
 
}

.dropdown-content a {
  color: #e74c3c;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover  {
    text-decoration: blink;
    background-color: #0e0e0e;}
    </style> 
        <!-- Custom styles for this template -->
        <link href="CustomCSS.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#"><i class="fas fa-book-open"> Donation Application </i></a>
        </div> 
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="text-transform:uppercase">  
            <li><a href="#wwa">Who We Are </a></li>
            <li><a href="#get_involved">Get Involved</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="home.php">HOME</a></li>
            <li>
                    <div class="dropdown">
                    <a href="signin.php" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">Account</a>
                    <div class="dropdown-content">
                        <a href="signin.php">Sign In</a>
                       <a href="checkout.php">Check Out</a>
                        <a href="signout.php">Sign Out</a>
                        <a href="admin.php">Administrator</a>
                        </div>
                    </div>
                </li>
          </ul>
        </div>
      </div>
    </nav>  
<main role="main">
 
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
        <h1 style="padding-top: 220px;">Donate What You Can <br> We Collect from Home, By Your Provided Details.</h1>
        <p>Share Few Gifts from Your Blessings.</p>
    </div>
  </div>
  <div id="wwa">
    <div class="container homepage">
      <span class="fa-stack fa-7x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-certificate fa-stack-1x fa-inverse"></i>
          </span>
      <h2>Who We Are</h2>
      <hr>
      <p>We provide you with the most convenient and easy way to donate those items that are just lying at some corner of your house, gathering dust and taking up some much-needed space. It’s time to donate them and give those books, toys, clothes etc a new life.
    There are many benefits to donating your old stuff to the people who really need them.</p>
      <h2>Our Process</h2>
      <hr>
      <p><img src="images/op.png"/></p>
      <ul>
          <li style="list-style-type: none"><h4>Schedule a Pickup</h4></li>
          <li style="list-style-type: none"><h4>Donate at your Doorstep</h4></li>
          <li style="list-style-type: none"><h4>Get Rewards</h4></li>
      </ul>
    </div>
  </div>
  <div id="get_involved">
    <div class="container homepage">
       <h2>Get Involved</h2>
       <hr>
       <div class="cbg">
    <div class="container">
    <div class="col-md-12">
    <div id="logbox">
        <form method="post">
      
        <input name="name" type="text" placeholder="Enter your username"  autofocus="autofocus" required="required" class="input pass"/>
        <input name="password" type="password" placeholder="Choose a password" required="required" class="input pass"/>
 
        <input name="email" type="email" placeholder="Email address" required="required" class="input pass"/>
        <input type="submit" value="Sign me up!" name="submit" class="inputButton"/>
      </form>
    </div>
   <?php
            if(isset($_POST['submit']))
            {
                $u_name=$_POST['name'];
                $password=$_POST['password'];
                $email=$_POST['email'];
                $user_id = uniqid();
                
                $query = "insert into user (user_id ,u_name,email,password)values('$user_id','$u_name','$email','$password')";
                if (mysqli_query($conn, $query)) {
    echo "<script>alert('THANKYOU FOR JOINING US :)')</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
            }
        ?>
   </div>
    <!--col-md-6-->
   
  </div>
  </div>
  </div> <!-- /container -->
</main>

      <footer>
      
  </footer>
  
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
</body>
</html>
