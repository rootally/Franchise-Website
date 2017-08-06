<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		 <script type="text/javascript" src="jquery-1.8.2.min.js"></script>
    <title>COGNUT	</title>
		<link rel="icon" href="logo.ico" type="image/x-icon">
    <style>
.navbar-brand
{
	
	margin-top:13px;
}
			.btn-primary-outline {
  background-color: transparent;
  border-color: #ccc;
}

					.carousel-inner > .item > img
					{
						width:100%;
						height:550px;
					}
					
					#myBtn {
						display: none;
						position: fixed;
						bottom: 20px;
						right: 30px;
						z-index: 99;
						border: none;
						outline: none;
						background-color: red;
						color: white;
						cursor: pointer;
						padding: 15px;
						border-radius: 10px;
					}
					
					#myBtn:hover {
						background-color: #555;
					}
		</style>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link href="css/mdb.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Material Design Bootstrap -->

    <script type="text/javascript">
			$(document).ready(function() {
								
			$(function () {
  $('[data-toggle="tooltip"]').tooltip()
			})

				 
			 $("#chkStat").click(function(){
				document.getElementById("Pay").style.display="none";
			 });

			  $("#flogin").click(function(){
						$us = "lol"; $pa = "lol";

						 if($('#fran').is(':checked'))
						 {
							var allData=$("#login").serialize();
						 // alert(allData);

							var url="loginProcess.php?"+allData;
								$.get(url,function(data,status)
								 {

									if(data == "Signed up Successfully")
										{
											
											location.href="Flogin.php";
										}
									else
										alert("Check your Email-Id or Password, it's not regestered with our system");	
								});
						 }
						 else
						 {
							  $u=$("#luid").val() ;
								$p= $("#lpwd").val();
							

							if($us == $u && $pa == $p )
							{
								
								//alert("Successfully logged In");
								location.href="owner.php";
							}
							else
							{

								alert("Wrong Username or Password");

							}
						 }

				 });

			  $("#paay").click(function(){
					//var allData=$("#payform").serialize();
						//alert(allData);
						//	var url="payProcess.php?"+allData;
						$('#status').modal('hide');
								$.get("payProcess.php?mobile="+$("#mobi").val()+"&date="+$("#date").val()+"&amount="+$("#amount").val()+"&acc="+$("#acc").val()+"&tid="+$("#tid").val(),function(data,status)
								 {
										alert(data);

									if(data == "Payment Successful")
										{
											$('#modalpay').modal('hide');

											$('#success').modal('show');

										}
								});

				 });
				
				$("#subsend").click(function(){
					//alert("lol");
					var allData=$("#rsubs").serialize();
					//alert(allData);
						var sub="subProcess.php?"+allData;
						
								$.get(sub,function(data,status)
								 {
										alert(data);
								});
					$('#modalsubs').modal('hide');
				 });


			   $("#fpass").click(function(){

							$('#modalLogin').modal('hide');
							$('#forgotpass').modal('show');
				 });
				
				
			   $("#rlogin").click(function(){

							$('#modalRegister').modal('hide');
							
				 });
						
						$("#rsave").click(function(){
						
						$.get("ajaxProcess.php?mobile="+$("#mobile").val(),function(data,status){
							//alert(data);
							if(data == "Available" )
							{
							var allData=$("#rform").serialize();
							//alert(allData);
							var url="signupProcess.php?"+allData+"&mobile="+$("#mobile").val();
								$.get(url,function(data,status){
									//alert(data);
									
									if(data =="Signed up")
										{
										//	alert("lol");
											$('#modalRegister').modal('hide');
											$('#signedUp').modal('show');
										}
										
										else
											alert(data);
									});
										
							}
							else
								alert("Mobile Number already registered!");
									
							});
						});
				
				 $("#fsend").click(function(){
						$.get("frontSms_process.php?email="+$("#femail").val(),function(data,status){

						alert(data);


						});

				 });
				 
			   $("#btnCheck").click(function(){
						$.get("ajaxProcess.php?mobile="+$("#cmobile").val(),function(data,status){
						

						if(data=="0")
						{
							$('#status').modal('hide');
							$('#pending').modal('show');

						}
						else if(data=="1")
						{
							document.getElementById("Pay").style.display="block";
						}

						else if(data == "2")
						{
							$('#status').modal('hide');
							$('#rejected').modal('show');
						}

						else if(data == "3")
						{
							$('#status').modal('hide');
							$('#paid').modal('show');
						}
						
						else
						{	
							alert("Invalid Mobile Number");
						}
						});
				   });
		});


			
		function doShow(file)
		{
			 if (file.files && file.files[0])
		 	{
           	 	var reader = new FileReader();
            	reader.onload = function (e) {
                $('#prev').attr('src', e.target.result);
            	};
           	 reader.readAsDataURL(file.files[0]);
       	    }
		}
		
		    window.onscroll = function() {scrollFunction()};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
							document.getElementById("myBtn").style.display = "block";
					} else {
							document.getElementById("myBtn").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					$("html,body").animate({scrollTop:$("#topdiv").offset().top-200 },"slow");
				}

	</script>
  </head>
  <body >
		<div id= "topdiv"></div>
		<button onclick="topFunction() " class="btn btn-indigo" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></span></button>
    <!--header-->
    <header class="main-header" id="header">
        <div class="bg-color">
            <!--nav-->
            <nav class="nav navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="col-md-12">
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars" aria-hidden="true"></span>
                        </button>
												<a href="index.php" class="navbar-left"><img src="logo.ico" width=50px height=50px margin-top=-20px	></a>
                            <a href="index.php" class="navbar-brand">COGNUT</a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><button type="button" class="btn btn-primary">Home</button></li>
                                <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">Log-In</button></li>
																<li><button type="button" class="btn btn-success" id="chkStat" data-toggle="modal" data-target="#status">Check Status!</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!--/ nav-->
            <div class="container text-center">
                <div class="wrapper wow fadeInUp delay-05s" >
                    <h2 class="top-title">1000+ Bussiness Opportunities</h2>
                    <h3 class="title">COGNUT</h3>
                    <h4 class="sub-title"></h4>
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalRegister">Register Now!</button>
                </div>
            </div>
        </div>
    </header>
    <!--/ header-->
    <!---->



    <section id="cta-1">
        <div class="container">
            <div class="row">
                <div class="cta-info text-center">
                    <h3><span class="dec-tec">“</span>Everything is Baked. Few things are Baked well.<span class="dec-tec">”</span>  -Amit</h3>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <!---->

    <!---->
    <section class="section-padding wow fadeInUp delay-02s" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="section-title">
                        <h2 class="head-title">Our Products</h2>
                        <hr class="botm-line">
                        <p class="sec-para">Food brings people together on many different levels. It's nourishment of the soul and body; it's truly love.</p>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="col-md-4 col-sm-6 padding-right-zero">
                        <div class="portfolio-box design">
                            <img src="img/food0.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 padding-right-zero">
                        <div class="portfolio-box design">
                            <img src="img/food1.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 padding-right-zero">
                        <div class="portfolio-box design">
                            <img src="img/food2.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 padding-right-zero">
                        <div class="portfolio-box design">
                            <img src="img/food3.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 padding-right-zero">
                        <div class="portfolio-box design">
                            <img src="img/food4.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 padding-right-zero">
                        <div class="portfolio-box design">
                            <img src="img/food5.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <!---->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/cfood1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="img/cfood2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="img/cfood4.jpg" alt="New York">
    </div>

		<div class="item">
      <img src="img/cfood3.jpeg" alt="New York">
    </div>

  </div>

	  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		<br>	<br>	<br>	<br>	<br>	<br>	<br>


		<section class="section-padding parallax bg-image-2 section wow fadeIn delay-08s" id="cta-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="cta-txt">
                        <h3>Subscribe For Updates</h3>
                        <p>Join our 1000+ subscribers and get access to the latest news, freebies, product announcements and much more!</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <a href="#" class="btn btn-submit" data-toggle="modal" data-target="#modalsubs">Subscribe Now</a>
                </div>
            </div>
        </div>

    </section>
    <!---->

    <section class="section-padding wow fadeInUp delay-05s" id="contact">
        <div class="container">

            <div class="row white">
                <div class="col-md-8 col-sm-12">
                    <div class="section-title">
                        <h2 class="head-title ">Contact Us</h2>
                        <hr class="botm-line">
                        <p class="sec-para ">Just send us your questions or concerns and we will give you the help you need.</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-4 col-sm-6" style="padding-left:0px;">
                        <h3 class="cont-title">Email Us</h3>
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <div class="contact-info">
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <button type="submit" class="btn btn-send">Send</button>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h3 class="cont-title">Visit Us</h3>
                        <div class="location-info">
                            <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Via Dope Street, Earth!</p>
                            <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: 0091 9988556829</p>
                            <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="" class="link-dec">weareawesome@lol.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
                            <span aria-hidden="true" class="fa fa-envelope-o"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <!---->
    <footer class="" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 footer-copyright">
                </div>
                <div class="col-sm-5 footer-social">
                    <div class="pull-right hidden-xs hidden-sm">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!---->
    <!--contact ends-->

<!-- ###########################################################################################################################  -->



<!-- Central Modal Medium Success -->
<div class="modal fade" id="paid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <center><p class="heading lead">Franchise Member</p></center>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fa fa-check fa-4x mb-1 animated rotateIn"></i>
                    <p>Congratulations, now u are a part of our Company</p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">

                <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Close</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Success-->


<!-- Central Modal Medium Danger -->
<div class="modal fade" id="rejected" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
              <center><p class="heading lead">Application Rejected</p></center>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fa fa-check fa-4x mb-1 animated rotateIn"></i>
                    <p>We are sorry to inform that your Application has been rejected. Better Luck next time!</p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">

                <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Close</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Danger-->


<!-- Central Modal Medium Warning -->
<div class="modal fade" id="pending" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-warning" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <center><p class="heading lead">Application Pending</p></center>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fa fa-check fa-4x mb-1 animated rotateIn"></i>
                    <p>Please have patience, your application is still in process!</p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Close</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Warning-->


<!-- Central Modal Medium Success -->
<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <center><p class="heading lead">Payment Done</p></center>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fa fa-check fa-4x mb-1 animated rotateIn"></i>
                    <p>Payment Successful, Please wait until we confirm your receipt!</p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">

                <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Close</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Success-->


<!--Modal: Status Form-->
	<div class="modal fade" id="status" tabindex="-1" role="dialog" aria-labelledby="myModalLabe" aria-hidden="true">
      <div class="modal-dialog cascading-modal " role="document">

				  <!--Content-->
          <div class="modal-content">
          <!--Form with header-->
					<div class="card">
							<div class="card-block">

									<!--Header-->
									<div class="form-header  purple darken-4">
											<h3><i class="fa fa-lock"></i> Login:</h3>
									</div>

									<!--Body-->
									<div class="md-form">
										<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
											<i class="fa fa-user prefix"></i>
											<input type="text" id="cmobile" class="form-control">
											<label for="cmobile">Mobile No.</label>
											</div>
										</div>
									</div>

						<center><button type="button" class="btn btn-primary"  value="Check Id"  id="btnCheck" name="btnCheck" >Check Status!</button></center>
						<center><button type="button" class="btn btn-deep-purple"  value="Pay Now"  id="Pay" name="Pay" data-toggle="modal" data-target="#modalpay" >Pay Now!</button></center>


							</div>

							<!--Footer-->
							<div class="modal-footer">
                  <div class="options text-center text-md-right mt-1">

                  </div>

                  <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close <i class="fa fa-times-circle ml-1"></i></button>
              </div>
					</div>
<!--/Form with header-->
             </div>

           </div>
  </div>
<!--Modal: Status Form-->

 <!-- Central Modal Forgot Password -->
<div class="modal fade" id="forgotpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-warning" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Forgot Password</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
									<div class="md-form">
													<div class="row">
												<div class="col-md-8 col-md-offset-2">
														<i class="fa fa-envelope prefix"></i>
														<input type="text" id="femail" name="femail" class="form-control">
														<label style=" margin-left: 60px" for="femail">Your email</label>
												</div>
												</div>
													</div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="submit" class="btn btn-primary-modal" id="fsend">Send <i class="fa fa-diamond ml-1"  ></i></a>
                <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Close</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Forgot Password-->

 <!--Modal: lOGIN Form-->
	<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabe" aria-hidden="true">
      <div class="modal-dialog cascading-modal " role="document">

				<form id="login" >

				  <!--Content-->
          <div class="modal-content">
          <!--Form with header-->
								<div class="card">
										<div class="card-block">

												<!--Header-->
												<div class="form-header  purple darken-4">
														<h3><i class="fa fa-lock"></i> Login:</h3>
												</div>

												<!--Body-->
												<div class="md-form">
													<div class="row">
												<div class="col-md-8 col-md-offset-2">
														<i class="fa fa-envelope prefix"></i>
														<input type="text" id="luid" name="luid" class="form-control">
														<label style=" margin-left: 60px" for="luid">    Your email</label>
												</div>
												</div>
													</div>

												<div class="md-form">
													<div class="row">
												<div class="col-md-8 col-md-offset-2">
														<i class="fa fa-lock prefix"></i>
														<input type="password" id="lpwd" name="lpwd" class="form-control">
														<label style=" margin-left: 60px" for="lpwd">    Your password</label>

												</div>
												 </div>
												</div>

												<div class="row">
						  						<div class="col-md-8 col-md-offset-2">

									   		<label class="radio-inline"><input type="radio" checked="checked" id="fran" name="optradio">Franchise</label>
							   			  <label class="radio-inline"><input type="radio" name="optradio" id="admin">Admin</label>

												  </div>
												</div>
										<br><br>
												<div class="text-center">
														<button type = "button" class="btn btn-deep-purple" id="flogin" >Login</button>
												</div>

										</div>

										<!--Footer-->
										<div class="modal-footer">
												<div class="options">
														<p>Forgot <a id="fpass" class="blue-text">Password?</a></p>
												</div>
										</div>

								</div>
								<!--/Form with header-->
             </div>
				</form>
           </div>
  </div>
<!--Modal: Status Form-->


 <!--Modal: Payment Form-->
  <div class="modal fade" id="modalpay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog cascading-modal " role="document">
        <form id = "payform" >
				  <!--Content-->
          <div class="modal-content">
            <div class="card">
              <div class="card-block">


              <!--Header-->
               <div class="form-header blue-gradient">
            <h3><i class="fa fa-user"></i> Payment</h3>
        </div>
              <!--Body-->

            <div class="modal-body">
                		<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="md-form form-group ">
                            	<label for="mobi">Mobile No.</label>
                                <input type="text" id="mobi" name="mobi" class="form-control" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="md-form form-group ">
                            	<label for="date">Date</label>
                                <input type="text" id="date" name="date" class="form-control" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="md-form form-group ">
                            	<label for="amount">Amount</label>
                                <input type="text" id="amount" name="amount" class="form-control" >
                            </div>
                        </div>
                    </div>

                  <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="md-form form-group ">
                            	<label for="acc">Account Number</label>
                                <input type="text" id="acc" name="acc" class="form-control" >
                            </div>
                        </div>
                    </div>

                  <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="md-form form-group ">
                            	<label for="tid">Transcation Id</label>
                                <input type="text" id="tid" name="tid" class="form-control" >
                            </div>
                        </div>
                    </div>

              </div>
              <!--Footer-->
              <div class="modal-footer">
                 <button type="button" class="btn btn-primary"  value="Submit"  id="paay" name="Save" >Pay!</button>
                  <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close <i class="fa fa-times-circle ml-1"></i></button>
              </div>
         </form>
          </div>

          <!--/.Content-->
      </div>
             </div>
           </div>
  </div>
<!--Modal: Register Form-->

<!--Modal: Subscription Form-->
  <div class="modal fade" id="modalsubs" tabindex="-1" role="dialog" aria-labelledby="myModalLabe" aria-hidden="true">
      <div class="modal-dialog cascading-modal " role="document">
		<form id="rsubs" >
										<!--Content-->
					<div class="modal-content">
										<!--Form with header-->
						<div class="card">
							<div class="card-block">

									<!--Header-->
									<div class="form-header  purple darken">
														<h3><i class="fa fa-lock"></i> Subscribe</h3>
												</div>

									<!--Body-->
									<div class="row">
                    	<div class="col-md-9 col-md-offset-1">
									<p>We'll write rarely, but only the best content.</p>
									<br>
										</div>
									</div>

									<!--Body-->
									<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
									<div class="md-form form-group">
											<i class="fa fa-user prefix"></i>
											<label for="sname">Your name</label>
											<input type="text" id="sname" name="sname" class="form-control">
									</div>

									<div class="md-form form-group">
											<i class="fa fa-envelope prefix"></i>
											<label for="semail">Your email</label>
											<input type="text" id="semail" name="semail" class="form-control">
									</div>
										</div>
									</div>


									<div class="text-center">
											<button type="button" class="btn btn-deep-orange" id= "subsend" >Send</button>
									</div>

							</div>
						</div>
						<!--/Form without header-->
             </div>
		</form>
           </div>
  </div>
<!--Modal: Subscription Form-->

<!-- Central Signed Up Success -->
<div class="modal fade" id="signedUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Application Registered</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fa fa-check fa-4x mb-1 animated rotateIn"></i>
                    <p>We have received your application please wait until we process it, you can always check your application status in the meantime!</p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Close</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Success-->

 <!--Modal: Register Form-->
  <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog cascading-modal " role="document">
        <form id ="rform" data-toggle="validator" method="post">
				  <!--Content-->
          <div class="modal-content">
            <div class="card">
              <div class="card-block">


              <!--Header-->
               <div class="form-header blue-gradient">
            <h3><i class="fa fa-user"></i> Register:</h3>
        </div>
              <!--Body-->

            <div class="modal-body">
							
                		<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="form-group has-feedback">
						
												<div class="input-group">
													<label for="mobile" class="control-label"></label>
													<input type="text" pattern="^[7-9]{1}[0-9]{9}$" maxlength="10" class="form-control" id="mobile" placeholder="Mobile No." required>
												</div>
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
											</div>
                    </div>
										</div>

                		<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="md-form form-group ">
                            	<label for="uid">Name</label>
                                  <input type="text" id="uid" name="uid" class="form-control" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                         <div class="md-form form-group">
                              <label for="email">Email-id</label>
                                  <input type="text" id="email" name="email" class="form-control" >
                          </div>
                        </div>

                        <div class="md-form col-md-4">
                          <div class="form-group">
                            	<label for="city">City</label>
                                  <input type="text" id="city" name="city" class="form-control" >
                          </div>
                        </div>
                    </div>

                   <div class="row">
                      <div class="col-md-4 col-md-offset-2">
                       <div class="form-group">
                            	<label for="adr">Address</label>
                                <textarea class="form-control" rows="4" id="adr" name="adr"></textarea>
                        </div>
                      </div>

                    <div class="col-md-4">
                      <div class="form-group">
                            	<label for="loc">Location</label>
                                 <textarea class="form-control" rows="4" id="loc" name="loc" data-toggle="tooltip" data-placement="right" title="Fill the location of the site!"></textarea>
                      </div>
                    </div>
                   </div>

                  <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                         <div class="md-form form-group">
                              <label for="size">Size</label>
                                  <input type="text" id="size" name="size" class="form-control" data-toggle="tooltip" data-placement="right" title="Enter in Yards!">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="md-form form-group">
                            	<label for="income">Annual Income</label>
                                  <input type="text" id="income" name="income" class="form-control" data-toggle="tooltip" data-placement="right" title="Fill in Rupees">
                          </div>
                        </div>
                    </div>

               <div class="row">
                 	<div class="col-md-4 col-md-offset-2">
                    <form method="post" action="fileuploadProcess.php" enctype="multipart/form-data">
												<label for="file">Upload Id-Proof</label>
                            <input type="file" name="profilePic" onchange="doShow(this);" />
											</div>
														<div class="col-md-2 col-md-offset-1">
															<div class="form-group">
                            <img src="img/nopic.png" width="80" height="80"  id="prev" style="float: left"/>
                            
											</div>
                    </form>
                </div>
            </	div>

              </div>
              <!--Footer-->
              <div class="modal-footer">
                  <div class="options text-center text-md-right mt-1">
                      <p>Already have an account? <a data-toggle="modal" data-target="#modalLogin" id="rlogin">Log In</a></p>
                  </div>
                  <button type="button" class="btn btn-primary" id= "rsave"  value="Save" name="btn" >Submit</button>
                  <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close <i class="fa fa-times-circle ml-1"></i></button>
              </div>
         </form>
          </div>

          <!--/.Content-->
      </div>
             </div>
           </div>
  </div>
	
<!--Modal: Register Form-->



    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
		<script src="js/validator.js"></script>
    <script src="contactform/contactform.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

  </body>
</html>