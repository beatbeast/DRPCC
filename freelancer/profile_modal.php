<?php //session_start() ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Add New Product <span>Advert</span></h3>
						<form action="addproduct.php" method="post" name="AddProduct" enctype="multipart/form-data">
							<input type="hidden" name="email" value="<?php echo $email; ?>">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="product_name" required="">
								<label>Product Name:</label>
								<span></span>
							</div>
							<div class="styled-input">
							Product Type:
								<select name="product_type">
									<option value"">Select The Product type</option>
									<option value="men">Men Clothings</option>
									<option value="women">Women Clothings</option>
									<option value="Accessories"> Cloths Accesories</option>
									<option value="Phones">Phones and Accessories</option>
									<option value="computer">Computet Accessories</option>
									<option value="Electronics">Electronics</option>
									<option value="Beauty">Make Up and Creams</option>
								</select>
								<label></label>
								<span></span>
							</div>

							<div class="styled-input agile-styled-input-top">
								<input type="text" name="normal_price" required="">
								<label>Normal Price:</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="high_price" required="">
								<label>High Price:</label>
								<span></span>
							</div>
							<div class="styled-input">
								<textarea name="description" rows="3" cols="40" required=""></textarea>
								<label>Description:</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="file" name="file1" required="">
								<label></label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="file" name="file2" required="">
								<label></label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="file" name="file3" required="">
								<label></label>
								<span></span>
							</div>
							 
							<input type="submit" name="place_advert" value="Place Advert">
						</form>
						  			<div class="clearfix"></div>
														<p>Ensure Your Pictures are in a portrate form</p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->

		
<!-- //Modal2 -->

			</div>
		</div>