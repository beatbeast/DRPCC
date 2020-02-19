<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$page='profile';
require('usersession.php');
require('header.php');

?>
<!-- //Modal1 -->
<!-- Modal2 -->
		
<?php
    ob_start();
    // session_start();
   // require "../includes/connection.php";

    {
        $query = "SELECT * FROM product_advert WHERE email='$email'";
        $result = $dbconnect->Query($query);
        
        
    }
?>

  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		<div class="col-md-4 products-left">
			<div class="filter-price">
				<h3>Welcome <span> <?php echo $fname; ?> </span></h3>
					
			</div>
		<?php
		require 'profile_nav.php'
		?>
		<div class="col-md-8 products-right">
			<h5>Your  <span>Products</span></h5>


			<?php 
             // fetching data from database
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  	//this is the query of the picture
                  	$Pid= $row['Product_id'];
                  	$query1 = "SELECT * FROM product_picture WHERE product_id='$Pid'";
        			$result1 = $dbconnect->Query($query1);
        			$row1 = $result1->fetch_assoc();

            ?>
				<div class="col-md-4 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="<?php echo 'product_pictures'.'/'.$row1['pic_name'];?>" alt="" class="pro-image-front">
										<img src="<?php echo 'product_pictures'.'/'.$row1['pic_name'];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="Productview.php" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href=".html"><?php echo $row['Product_name'];?></a></h4>
										<div class="info-product-price">
											<span class="item_price"><?php echo '$'.$row['Normal_price']; ?> </span>
											<del><?php echo '$'.$row['High_price']; ?></del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Party Men's Blazer">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
							<?php
                                }
                            }else{
                                echo "0 result";
                            }
                            ?>

</div>
</div>
</div>
</div>
				
<!--grids-->
<!-- footer -->
<?php
require('footer.php');
?>