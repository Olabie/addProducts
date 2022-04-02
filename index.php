<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Products</title>
</head>
<link rel="stylesheet" type="text/css" href="./styles/main.css?v=3">
<link rel="stylesheet" type="text/css" href="./styles/header.css?v=3">
<link rel="stylesheet" type="text/css" href="./styles/footer.css?v=1">
<body>
<!-- Start header -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 
 <header>
    <div class="container" >
    <div style="text-decoration:none;" class="logo">Product List</div>
    <div class="buttons">
         <a  class="btn add"  href="./addproduct.php">ADD</a>
        <button id="delete-product-btn" name="submit" type="submit"  class="btn del">MASS DELETE</button>
    </div>
    </div>
 </header>

 <!-- End header -->
 <!-- Start products -->
<div class="prod-container container ">
    <!-- Fetching data & deleting -->
<?php  include 'models/model.php'?>
<!-- Rendering data -->
<?php  include 'views/renderProducts.php'?>
</form>

</div>
 <!-- End products -->

 <!-- Start footer -->
 <?php  include 'includes/footer.php'?>
 <!-- End footer -->

</body>
</html>