  <section id="banner">
   
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                     
          <p style="font-family:arial black;font-size:34px;text-shadow: 2px 2px yellow;color:blue;">Online Schools Recruitment System</p> <br/>
		           <a href="<?php echo web_root; ?>index.php?q=register" class="btn btn-main btn-next-tab">Register Now!</a>
                                  
                </div>
              </li>
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    
          <p style="font-family:arial black;font-size:34px;text-shadow: 2px 2px yellow;color:blue;">ACU SECONDARY SCHOOLS</p> 
		  <br/>
		           
                                  
           
                </div>
              </li>
			  <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                    
          <p style="font-family:arial black;font-size:34px;text-shadow: 2px 2px yellow;color:blue;">MEMKAD SCHOOLS</p>
<br/>
		           
                                  		  
           
                </div>
              </li>
			  <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    
          <p style="font-family:arial black;font-size:34px;text-shadow: 2px 2px yellow;color:blue;">SUPREME COLLEGE</p> 
		  <br/>
		            
                                  
           
                </div>
              </li>
			  <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                    
          <p style="font-family:arial black;font-size:34px;text-shadow: 2px 2px yellow;color:blue;">IGNEOUS PRIVATE SCHOOLS</p> 
           <br/>
		         
                                  
                </div>
              </li>
			  <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    
          <p style="font-family:arial black;font-size:34px;text-shadow: 2px 2px yellow;color:blue;">INAAYATULLAH ACADEMY</p> 
           <br/>
		            
                                  
                </div>
              </li>
			  <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                    
          <p style="font-family:arial black;font-size:34px;text-shadow: 2px 2px yellow;color:blue;">THE WISDOM GLOBAL SCHOOL</p> 
           <br/>
		           
                                  
                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->
 
  </section> 
  <section id="call-to-action-2">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <h3>Great Schools | Great Teachers</h3>
          <p>Development of successful, long term, strategic relationships between Teachers and Schools, based on achieving best practice and sustainable competitive advantage. In the business partner model, professionals work closely with schools and to achieve shared schools organisational objectives.</p>
        </div>
       <!--  <div class="col-md-2 col-sm-3">
          <a href="#" class="btn btn-primary">Read More</a>
        </div> -->
      </div>
    </div>
  </section>
  
   <section id="content">
  
  
   <div class="container">
        <div class="row">
      <div class="col-md-12">
        <div class="aligncenter"><h2 class="aligncenter">Schools</h2><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. --></div>
        <br/>
      </div>
    </div>

    <?php 
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();


      foreach ($comp as $company ) {
        # code...
    
    ?>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-building-o"></i>
                <div class="info-blocks-in">
                    <h3><?php echo $company->COMPANYNAME;?></h3>
                    <!-- <p><?php echo $company->COMPANYMISSION;?></p> -->
                    <p>Address :<?php echo $company->COMPANYADDRESS;?></p>
                    <p>Contact No. :<?php echo $company->COMPANYCONTACTNO;?></p>
                </div>
            </div>

    <?php } ?> 
  </div>
  </section>
  
  <section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >Teaching Jobs</h2>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php 
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }

          ?>
        </div>
      </div>
 
    </div>
  </section>    
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder">

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <div class="editContent">
          <h3>Our Team</h3>
        </div>
        <div class="editContent"  style="height:235px;">
          <p> 
          &nbsp;&nbsp;Our "one team" attitude breaks down silos and helps us engage equally effectively from the C-suite to the front line. Our collaborative working style emphasizes teamwork, trust, and tolerance for diverging opinions. People tell us we are down-to-earth, approachable and fun.<br/><br/>

          &nbsp;&nbsp;We have a passion for our clients' true results and a pragmatic drive for action that starts Monday morning 8am and doesn't let up. We rally clients with our infectious energy, to make change stick.<br/><br/>

          &nbsp;&nbsp;And we never go it alone. We support and are supported to develop our own personal results stories. We balance challenging and co-creating with our clients, building the internal capabilities required for them to create repeatable results. </p>
        </div> 
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section>
  
  <div class="about home-about">
        <div class="container">
            
            <div class="row">
              <div class="col-md-4">
                <!-- Heading and para -->
                <div class="block-heading-two">
                  <h3><span>About Us</span></h3>
                </div>
                <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br><br>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
              </div>
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Latest News</span></h3>
                </div>    
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel"> 
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i> We are the best...
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
                 We give authentic look into school culture through videos of employees collaborating and socializing. It also includes fun & interactive elements. We also defines the type of employees they are and are seeking with our great applications.
				 </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i> Let our experts handle everything for you...
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    We give authentic look into school culture through videos of employees collaborating and socializing. It also includes fun & interactive elements. We also defines the type of employees they are and are seeking with our great applications.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i> Join us today....
                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                 We give authentic look into school culture through videos of employees collaborating and socializing. It also includes fun & interactive elements. We also defines the type of employees they are and are seeking with our great applications.  </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                      <i class="fa fa-angle-right"></i> We offer nothing but the best...
                      </a>
                    </h4>
                   </div>
                   <div id="collapseFour-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
               We give authentic look into school culture through videos of employees collaborating and socializing. It also includes fun & interactive elements. We also defines the type of employees they are and are seeking with our great applications.   </div>
                   </div>
                  </div>
                </div>
                <!-- Accordion ends -->
                
              </div>
              
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Testimonials</span></h3>
                </div>  
                     <div class="testimonials">
                    <div class="active item">
                      <blockquote><p>Thanks to the Online Recruitment System Organinization who has help me to secure my current place of work today, i now work as a pricipal to the secondary school here in Nigeria. You can always and also give it a try. OSRS you are the best!!!.</p></blockquote>
                      <div class="carousel-info">
                      <img alt="" src="img/logo.jpeg" class="pull-left">
                      <div class="pull-left">
                        <span class="testimonials-name">Atunwa Micheal A.</span>
                        <span class="testimonials-post">C.E.O/Founder of ACU | OSRS</span>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
              
            </div>
            
                        
             
            <br>
           
            </div>
            
          </div>