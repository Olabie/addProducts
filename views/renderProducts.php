<!-- Start rendering data -->
<?php foreach ($products as $prod) : ?>

<div class="prod">
		<input class="checker delete-checkbox" value="<?php echo $prod['sku'] ?>" name="checker[]" type="checkbox">
		<div class="SKU"><?php echo $prod['sku']?></div>
		<div class="name"><?php	echo $prod['prod_name']?></div>
		<div class="price"><?php echo $prod['prod_price'] . ".00$"?></div>
		<div class="prod-atts"><?php 
           if($prod['weight'])
           $msg = "Weight: " . $prod['weight'] . "KG";
          if($prod['size'])
           $msg = "Size: " . $prod['size'] . "MB";
          if($prod['height'])
           $msg = "Dimension: " .  $prod['height'] . "x" . $prod['width'] ."x" .  $prod['length'];
          
          echo $msg;
		  ?> </div>

	</div>

<?php endforeach; ?>
<!-- End rendering data -->
