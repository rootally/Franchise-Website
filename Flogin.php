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
		</style>


    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link href="css/mdb.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
		 <link rel="stylesheet" type="text/css" href="css/common.css">
		<link rel="stylesheet" type="text/css" href="css/style5.css">
    <!-- Material Design Bootstrap -->

		<script type="text/javascript">
			$(document).ready(function() {


			 $("#logout").click(function(){

				alert("You are successfully Logged out!");
				location.href="logout.php";
			 });
			  $("#changepass").click(function(){
						if($("#npass").val() == $("#rpass").val())
						{
								var allData=$("#changePass").serialize();
								// alert(allData);

								 var url="changePass.php?"+allData;
									 $.get(url,function(data,status)
										{
										 alert(data);

										 });
						}
						else
							alert("Password's don't match!!");
							$('#settings').modal('hide');
			});
				
				});
		</script>
  </head>
  <body background=img/back2.jpg ">
    <!--header-->
    <header  id="header">
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
                                <li class="active"><button type="button" class="btn btn-primary" onclick="location.href = 'Flogin.php';">Home</button></li>
                                <li><button type="button" class="btn btn-unique" data-toggle="modal" data-target="#settings">Settings</button></li>
																<li><button type="button" class="btn btn-unique"onclick="location.href = 'receiveOrder.php';">Place Order</button></li>
			 	  											<li><button type="button" class="btn btn-unique"onclick="location.href = 'fOrderHistory.php';">Order History</button></li>
														</ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!--/ nav-->
            <div class="container text-center">
                <div class="wrapper wow fadeInUp delay-05s" >
                    <h3 class="title">Franchise Panel </h3>
                    <h4 class="sub-title"></h4>

                    <button type="button" id="logout" class="btn btn-primary waves-effect waves-light">Logout</button>

                </div>
            </div>
        </div>
    </header>
    <!--/ header-->
    <!---->
		  <?php session_start();
				if(!isset($_SESSION["user"]))
					header("Location:index.php");
			?>
		<div class="container text-center">
                <div class="wrapper wow fadeInUp delay-05s" >
                     <center><h1>WELCOME:<?php echo $_SESSION["name"]; ?></h1></center>
               </div>
     </div>

		<section class="main">

				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1" >
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back"data-toggle="modal" data-target="#settings">
										<h3>Settings</h3>
										<p>Change password</p>
									</div>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="ch-item ch-img-2">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<a href="receiveOrder.php">
										<h3>Orders</h3>
										<p>Place new Order</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>


					<li>
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<a href="fOrderHistory.php">
										<h3>Order History</h3>
										<p>Check your Previous Orders</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>

				</ul>

			</section>

			</br></br></br></br></br></br>



		<!--Modal: Register Form-->
  <div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog cascading-modal " role="document">
        <form id = "changePass" >
				  <!--Content-->
          <div class="modal-content">
            <div class="card">
              <div class="card-block">


              <!--Header-->
               <div class="form-header blue-gradient">
            <h3><i class="fa fa-user"></i> Change Password</h3>
        </div>
              <!--Body-->

            <div class="modal-body">
                		<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="md-form form-group ">
                            	<label for="opwd">Old Password</label>
                                <input type="text" id="opwd" name="opwd" class="form-control" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="md-form form-group ">
                            	<label for="npass">New Password</label>
                                <input type="text" id="npass" name="npass" class="form-control" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="md-form form-group ">
                            	<label for="rpass">Retype Password</label>
                                <input type="text" id="rpass" name="rpass" class="form-control" >
                            </div>
                        </div>
                    </div>


              </div>
              <!--Footer-->
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary"  value="Change"  id="changepass" name="Save" >Change</button>
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
    <script src="contactform/contactform.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

  </body>
</html>
