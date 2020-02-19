<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$page='freelancer';
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
        $query = "SELECT * FROM employer_profile";
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
			<h5>ALL  <span>EMPLOYERS</span></h5>


			<?php 
             // fetching data from database
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  	//this is the query of the picture
                  	//$Pid= $row['Product_id'];
           //        	$query1 = "SELECT * FROM product_picture WHERE product_id='$Pid'";
        			// $result1 = $dbconnect->Query($query1);
        			// $row1 = $result1->fetch_assoc();

            ?>
				<div class="col-md-4 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="<?php echo 'employer_pictures'.'/'.$row['photo'];?>" alt="" class="pro-image-front">
										<img src="<?php echo 'employer_pictures'.'/'.$row['photo'];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="view_employer.php?id=<?php echo $row['id']; ?>" class="link-product-add-cart">View Employer</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product">
										<h4><a href=".html"><?php echo $row['surname'];?></a></h4>
										<div class="info-product-price">
											<span class="item_price"><?php echo $row['company_name']; ?> </span>
											
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