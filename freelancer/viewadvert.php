<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
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
													<a href="view_single_add.php?id=<?php echo $Pid; ?>" class="link-product-add-cart">Quick View</a>
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
															<form action="edit_single_add.php" method="post">
																<fieldset>
																	
																	<input type="hidden" name="id" value="<?php echo $Pid; ?>">
																	<input type="submit" name="submit" value="EDIT ADVERT" class="button">
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