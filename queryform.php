<?php include 'cms/db.php';?>
<?php session_start(); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Sign In</title>
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet" >


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
   <header>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index.php"><i class="fas fa-book-open"> Donation Application </i></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="text-transform:uppercase">
                <li><a href="home.php"  style="font-family: 'Arvo',courier, serif ;font-size: 13px;">HOME</a></li>
                <li>
                    <a  href="queryform.php" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">Contact Us</a>
                </li>
                <li>
                    <a href="index.php#wwa" style="font-family: 'Arvo',courier, serif ;font-size: 13px;">About Us</a>
                </li>
                <li><a href="donate.php"  style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Donate</a></li>
                <li>
                    <div class="dropdown">
                    <a href="signin.php" style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Account</a>
                    <div class="dropdown-content">
                        <a href="signin.php"  style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Sign In</a>
                       <a href="checkout.php" style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Check Out</a>
                        <a href="signout.php"  style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Sign Out</a>
                        <a href="admin.php"  style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Administrator</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        </div>
    </nav>
</header>
<main role="main" >
    <div class="cbg" style="    background-color: #efefef;">
        <div class="container" >
<div class="col-md-12">
      <h2 style="text-align: center; font-family: 'Arvo',courier, serif;padding-top: 50px;">Submit Your Query</h2>
      <div id="logbox" style="padding-top : 20px">
        <form method="post">
            <input name="email" type="email" placeholder="enter your email" class="input pass"/>
            <input name="password" type="password" placeholder="enter your password" required="required" class="input pass"/>
            <input name="query" type="text" placeholder="enter your querry" class="input pass"/>
            <input name="location" type="address" placeholder="enter your address" class="input pass"/>
            <a href="home.php"><input type="submit" name="submit" value="Submit Query!" class="inputButton"/></a>
      </form>
    </div>
        <?php
     if(isset($_POST['submit']))
  {
    $email = $_POST['email'];
    $password =$_POST['password'];
    $query = mysqli_query($conn, "select * from user where email='$email' and password='$password'");
    $check = mysqli_num_rows($query);

    if($check>0)
        {
        while ($row = mysqli_fetch_array($query))
            {
                    $_SESSION['user_id'] = $row['user_id'];
            }
        echo "<script>alert('YOUR QUERY HAS BEEN SUBMITTED')</script>";
        }
    else 
        {
            echo 'incorrect email';
        
        }    
}
?>
</div>
        </div>
    </div>
    <footer></footer>

</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
  
      


