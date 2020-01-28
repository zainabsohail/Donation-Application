<?php include 'cms/db.php';?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
   
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
    <link href="home.css" rel="stylesheet">
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
                <li>
                    <div class="dropdown">
                    <a href="home.php" style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Categories</a>
                        <div class="dropdown-content">
                              <a href="clothes.php"  style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Clothes</a>
                              <a href="shoes.php"  style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Shoes</a>
                              <a href="accessories.php"  style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Accessories</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a  href="queryform.php" style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Contact Us</a>
                </li>
                <li>
                    <a href="index.php#wwa" style="font-family: 'Arvo',courier, serif ;font-size: 13px;">About Us</a>
                </li>
                <li><a href="donate.php">Donate</a></li>
                <li>
                    <div class="dropdown">
                    <a href="signin.php" style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Account</a>
                    <div class="dropdown-content">
                        <a href="signin.php"  style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Sign In</a>
                       <a href="checkout.php"  style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Check Out</a>
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
<main role="main">
   <div class="album py-5 bg-light" style="padding-top:5rem; padding-bottom: 4rem;">
        <div class="container">
            <h2 style="text-align: center; font-family: 'Arvo',courier, serif;"> Accessories </h2>
            <div class="row">
                
                <div class="product_section">
                    <?php
           $query ="select * from clothes where product_cat = 'accessories' ";
            $run = mysqli_query($conn, $query);
            while($row= mysqli_fetch_array($run)){
          ?>
                    <div class="single_product text_center" style="display: inline-block; margin: 20px;">
                    <img src="images/img/<?php echo $row['clothes_img'];?>"width="148px" height="223px">
                    <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                    <h4>Description : <?php echo $row['product_desc'];?></h4>
                    <h4>Status : <?php echo $row['product_status'];?></h4>
                    <h4>Price : <?php echo $row['product_price'];?></h4>
                    <h4>
                         <a href="home.php?product_id=<?php echo $row['product_id'];?>" style="background: #e74c3c; color: #0e0e0e; font-size: 17px;border-radius:5px;padding: 2px;">Add to Cart</a>
                    </h4>
            </div>
          </div>
                    </div>
              <?php }?>
                
                </div>
            </div>       
  </div>
  </div>
</main>
       <footer></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>

