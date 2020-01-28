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
                <li><a href="home.php" style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Home </a>
                </li>
                <li>
                    <a  href="queryform.php" style="font-family: 'Arvo',courier, serif ;font-size: 13px;">Contact Us</a>
                </li>
                <li>
                    <a href="index.php#wwa" style="font-family: 'Arvo',courier, serif ;font-size: 13px;">About Us</a>
                </li>
                
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

<main role="main">
   <div class="album py-5 bg-light" style="padding-top:5rem; padding-bottom: 4rem;">
        <div class="container" style="text-align: center">
            <div class="row"><h2 style="text-align: center; font-family: 'Arvo',courier, serif;">Add your Valuable Donation </h2>
                    <div class="product_section" style="text-align: center">
                        <div class="tab-pane active" id="portlet_tab1" style="text-align: center">
                                        <!-- BEGIN FORM-->
                                        <form   action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            <div class="control-group" style="font-weight:bold;">
                                                <label class="control-label"style="font-family: 'Arvo',courier, serif ;font-size: 15px;padding-bottom: 20px;">Select Option To Add</label>
                                                    <div class="controls" style="font-family: 'Arvo',courier, serif ;font-size: 13px;">
                                                        <select class="m-wrap medium" name="product_cat" required>
                                                            <option style="padding-bottom: 20px;">Select Please</option>
                                                            <?php 
                                                            $cats = mysqli_query($conn,"select * from cats");
                                                            while($row = mysqli_fetch_array($cats)){
                                                                    ?>
                                                            <option value="<?php echo $row['cat_name']; ?>"><?php echo $row['cat_name']; ?></option>
                                                            <?php  } ?>
                                                        </select>
                                                    </div>
                                                        
                                                    </div>    
                                           
                                            <div class="control-group" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">
                                                <label class="control-label">Description</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap medium" name="product_desc" required/>
                                                </div>
                                            </div>
                                            <div class="control-group" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">
                                                <label class="control-label">Status</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap medium" name="product_status" required/>
                                                </div>
                                            </div>
                                            <div class="control-group" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">
                                                <label class="control-label">Price</label>
                                                <div class="controls">
                                                    <input type="number" class="m-wrap medium" name="product_price" required/>
                                                </div>
                                            </div>
                                            <div class="control-group" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">
                                                <label class="control-label">Image</label>
                                                <div class="controls">
                                                    <input type="file" class="m-wrap medium" name="clothes_img" accept="image/*" multiple required style="padding-left: 450px;padding-top: 20px;padding-bottom: 20px;"/>
                                                </div>
                                            </div>
                                            <div class="form-actions" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">
                                                <button type="submit" name="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                                <a href="home.php" class="btn">Cancel</a>
                                            </div>
                                        </form>
                                        
                                        <?php if(isset($_POST['submit'])){
                                        $product_id= "";
                                        $product_cat = $_POST['product_cat'];
                                        $product_desc = $_POST['product_desc'];
                                        $product_status = $_POST['product_status'];
                                        $product_price = $_POST['product_price'];
                                        $clothes_img =$_FILES['clothes_img']['name'];
                                        $pro_tmp1=$_FILES['clothes_img']['tmp_name'];
                                        move_uploaded_file($pro_tmp1,"images/img/$clothes_img");
                                        $query="insert into clothes(product_id,product_cat,product_desc,product_status,product_price,clothes_img)values('$product_id','$product_cat','$product_desc','$product_status','$product_price','$clothes_img')";
                     
                                         $run= mysqli_query($conn, $query);
                                        
                                         if($run == true ){
                                             echo "<script>alert('THANK YOU FOR YOUR DONATION :)')</script>";
                                         }else
                                         {
                                             echo "Error: " . $run . "<br>" . mysqli_error($conn);
                                         }
                                        }
                                        ?>
                                        <!-- END FORM-->
                                    </div>
                        
                    </div>
            </div>
        </div>
   </div>
    
</main>
<footer>
   
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>

