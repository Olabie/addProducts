<!-- Create connection with the database -->
<?php  include 'config/database.php';?>
<!-- Store data -->
<?php

if(isset($_POST['submit']))
{
  if(!headers_sent())
  {
      header('Location: index.php');
  }
  else{
      echo '<script> window.location.href="./index.php" </script>';
  
 if($_POST['type'] === 'Book')
 {
  $name   = htmlspecialchars($_POST['name']);
  $price  = htmlspecialchars($_POST['price']);
  $sku    = htmlspecialchars($_POST['sku']);
  $weight = htmlspecialchars($_POST['weight']);
  $sql ="INSERT INTO add_product(sku, prod_name, prod_price, prod_type, height, width, length, weight, size) VALUES ('$sku', '$name', '$price', 'Book', NULL, NULL, NULL,'$weight', NULL)";
  if ($conn->query($sql) === TRUE) {
  
    //HEre is the first place for the header
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
 elseif($_POST['type'] === 'DVD')
 {
  $name  = htmlspecialchars($_POST['name']);
  $price  = htmlspecialchars($_POST['price']);
  $sku    = htmlspecialchars($_POST['sku']);
  $size = htmlspecialchars($_POST['size']);
  $sql ="INSERT INTO add_product(sku, prod_name, prod_price, prod_type, height, width, length, weight, size) VALUES ('$sku', '$name', '$price', 'DVD', NULL, NULL, NULL,NULL, '$size')";
  if ($conn->query($sql) === TRUE) {
        
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
 }
  elseif($_POST['type'] === 'Furniture')
 {
  $name   = htmlspecialchars($_POST['name']);
  $price  = htmlspecialchars($_POST['price']);
  $sku    = htmlspecialchars($_POST['sku']);
  $height = htmlspecialchars($_POST['height']);
  $width = htmlspecialchars($_POST['width']);
  $length = htmlspecialchars($_POST['length']);
  $sql ="INSERT INTO add_product(sku, prod_name, prod_price, prod_type, height, width, length, weight, size) VALUES ('$sku', '$name', '$price', 'Furniture',$height, $width, $length,NULL, NULL)";
  if ($conn->query($sql) === TRUE) {
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
 }
  }
}?>