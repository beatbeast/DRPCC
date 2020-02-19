<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/urbanxchange.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Faculty Of Natuarl Sciences DINING ROOM</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/urbanxchange.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE ULTIMATE DINING EXPERIENCE</h5><!--content title-->
                                                <p>
                                                Sitting amongst historic sandstone, the faculty of natural sciences Dining
                                                Room is the epitome of elegance for a sophisticated celebration.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                With an extensive
                                                Drink and Food list available, AV capabilities for speeches and formalities, the
                                                Dining Room is a unique and stylish choice.
                                                </p>

                                                <p>
                                                Accommodating 50 guests for dinners or conferences and up to 60 for 
                                                cocktail parties, this private, heritage space brings character and
                                                charm to any event.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Faculty Of Natural Sciences Dining Room</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Underfloor
                            </p>
                            <p class="definition"><!--content body-->
                            Sitting amongst historic sandstone, the Faculty Of Natural Sciences Dining
                            Room is the epitome of elegance for a sophisticated celebration.When you dine in the 
                            Faculty Of Natural Sciences Dining Room, you can choose from our award winning.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/playground (1).jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">FNS Open Space</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/playground (1).JPG" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>FNS Open Space</h5><!--content title-->
                                                <p>
                                                Champagne imbibing, glamorous, smiling and flirting,FNS Open Space
                                                is the Sydney Sophisticate’s playground.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                The venue is only available within the hour of 7:00am to 8:00pm.
                                                FNS Open Space is a open field for alot of activities and it can occupy people not more than 500.s
                                                </p>

                                                <p>
                                                Our aim is to serve you better.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Faculty Of Natural Sciences Open Space</h1><!--location title-->
                            <p class="location">FNS Open Space</p><!--location secondary content-->
                            <p class="definition">
                            FNS Open Space is the Sydney Sophisticate’s playground.
                            This breathtaking venue is reserved for alots of activities like get together, dinner night, gaming, seminars, lectures e.t.c.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line--> 
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/playground (4).jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">FNLT Hall</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/playground (5).jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>FACULTY OF NATURAL SCIENCES LECTURE THEATHRE HALL</h5><!--content title-->
                                                <p>
                                                One of the bigest and famous hall in Ajayi Crowther University Oyo.
                                                
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                If your event is shaping up to be high in numbers, then Gallery’s high-end classic style has room to spare.
                                                there’s space for up to 500 guests – perfect for thriving
                                                cocktail parties, meetings, seminars, lectures, networking or post-conference events.
                                                </p>

                                                <p>
                                                The venue can also be hired for social or corporate functions for groups up to 1000. 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">FNLT HALL</h1>
                            <p class="location">Faculty of Natural Sciences</p>
                            <p class="definition">One of the bigest and famous hall in Ajayi Crowther University Oyo.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#argyle">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/munich.jpg" class = "img-responsive">
                        </div>
                        <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Munich Brauhaus Melbourne</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/playdround (4).jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>CROWTHER HALL</h5>
                                                <p>
                                                Beside school ceafetria.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                The Crowther Hall is the largest, most beautiful well equiped and standard hall in Ajayi Crowther University Oyo.
                                                This is where you can book for wedding ceremony, big parties, public lectures and seminars.
                                                The seats arrangement is over 2000 people and is located beside school cafeteria.
                                                </p>
                                                
                                                <p>
                                                We’re equipped with standard Air Condition, Exclusive engines (speakers, microphone), standard electricity generato (mikano), making it the
                                                prefect destination for events. Inbuilt stage and audio-visual capabilities make
                                                it a go-to destination for events of all shapes and sizes, so you can party.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Crowther Hall</h1>
                            <p class="location">Beside school cafeteria</p>
                            <p class="definition">The Crowther Hall is the largest, most beautiful well equiped and standard hall in Ajayi Crowther University Oyo.
                                This is where you can book for wedding ceremony, big parties, public lectures and seminars.
                                The seats arrangement is over 2000 people and is located beside school cafeteria.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
