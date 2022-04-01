<!-- Create connection with the database -->
	<?php  include 'config/database.php';?>



<!-- Fetch data -->
<?php 
$sql = 'SELECT * FROM add_product ORDER BY sku';
$result = mysqli_query($conn,$sql);
$products = mysqli_fetch_all($result,MYSQLI_ASSOC);
if(empty($products))
echo '<p style="color:red; text-align:center;">There are no products yet!</p>';
?>



<!-- Delete data -->
<?php 

if(isset($_POST['submit']) && isset($_POST['checker']) )
{
	echo var_dump($_POST);
	$selectedProducts = $_POST['checker'];
	foreach($selectedProducts as $productSku)
	{
		$sql ="DELETE FROM add_product WHERE add_product.sku = '$productSku'";
			if ($conn->query($sql) === TRUE) {
				 header("Location:index.php");
     echo "Record deleted successfully";
    } else {
     echo "Error deleting record: " . $conn->error;
      }
	}

}
