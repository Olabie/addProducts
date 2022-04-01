<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add product</title>
	<!-- Style links -->
   <link rel="stylesheet" type="text/css" href="./styles/main.css?v=3">
   <link rel="stylesheet" type="text/css" href="./styles/header.css?v=3">
   <link rel="stylesheet" type="text/css" href="./styles/footer.css?v=1">
   <link rel="stylesheet" type="text/css" href="./styles/addpage.css?v=2">
</head>
<body>
	<!-- Start header -->
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="adding-sec" id="product_form"> 
 <header>
 	<div class="container" >
 	<div class="logo">Product Add</div>
 	<div class="buttons">
 	<button   name="submit" type="submit" class="btn save">Save</button>
 		 <a  class="btn cancel" href="./index.php">Cancel</a>
 	</div>
 	</div>
 </header>
 <!-- End header -->

 <!-- Store data -->
<?php  include 'models/store.php';?>

 <!-- Start adding product -->
   	<div class="details">
     <div class="container">
   		<div class="labels">
   			<label>SKU</label>
   			<label>Name</label>
   			<label>Price ($)</label>
   			<label>Type Switcher</label>
   		</div>
   		<div class="inputs">
   		<input id="sku" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please, submit required data')" required="true" placeholder="SKU" type="text" name="sku">
   		<input id="name" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please, submit required data')" required="true" placeholder="Name" type="text" name="name">
   		<input id="price" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please, submit required data')" required="true" placeholder="Price" type="number" name="price">
   			<select oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please, submit required data')"  required="true"  name="type" id="productType">
   				  <option   value='' >Type Switcher</option>
                  <option id="DVD" value="DVD">DVD</option>
                  <option id="Book" value="Book">Book</option>
                  <option id="Furniture" value="Furniture">Furniture</option>
            </select>
   		</div>
    </div>
   	</div>
    <!-- Dynamic forms -->
      <div  class="dynamic-form container"></div> 

      </form>
      <!-- including footer -->
       <?php include 'includes/footer.php'?>
      <!-- Rendering forms script -->
      <script  src="./js/dynamicForm.js?v=2" type="text/javascript"></script>
      <!-- End dynamic forms -->
 <!-- End adding product -->
</body>
</html>