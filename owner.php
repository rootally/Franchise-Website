<!DOCTYPE html>
	<?php session_start();?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COGNUT	</title>
		<link rel="icon" href="logo.ico" type="image/x-icon">
    <script type="text/javascript" src="jquery-1.8.2.min.js"></script>
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
		<link rel="stylesheet" type="text/css" href="css/style6.css">
    <!-- Material Design Bootstrap -->

		<script type="text/javascript">

		 $(document).ready(function()
	  {
			

			 
			$("#save").click(function(){

				var allData=$("#process").serialize();
				//alert(allData);
			  var url="OwnerConsoleProcess.php?"+allData;
				$.get(url,function(data,status){

					//alert(data);
					alert("Saved");
					});

			});
	 });


		</script>

  </head>
  <body background=img/back2.jpg >
    <!--header-->
    <header  id="header">
        <div class="bg-color" style="background-image: url(../img/back1.jpeg)";>
            <!--nav-->
            <nav class="nav navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="col-md-12">
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars" aria-hidden="true"></span>
                        </button>
                        <a href="index.php" class="navbar-left"><img src="logo.ico" width=50px height=50px 	></a>
                            <a href="index.php" class="navbar-brand"></a>
                       </div>

                        <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><button type="button" class="btn btn-primary" onclick="location.href = 'owner.php';">Home</button></li>
                                <li><button type="button" class="btn btn-unique" onclick="location.href = 'table.php';"> Applications</button></li>
                                <li><button type="button" class="btn btn-unique" onclick="location.href = 'confirm_pay.php';">Confirm Payment</button></li>
																<li><button type="button" class="btn btn-unique" data-toggle="modal" data-target="#itemmaster">Item Master</button></li>
															  <li><button type="button" class="btn btn-unique" onclick="location.href = 'itemManager.php';">Item Manager</button></li>
																<li><button type="button" class="btn btn-unique" onclick="location.href = 'OrderHistory.php';">Sales History</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!--/ nav-->
            <div class="container text-center">
                <div class="wrapper wow fadeInUp delay-05s" >
                    <h3 class="title">Admin Panel!</h3>
                    <h4 class="sub-title"></h4>
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="location.href = 'index.php';" >Logout</button>
                </div>
            </div>
        </div>
    </header>
    <!--/ header-->
    <!---->

	    <section class="main">

				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1" >
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<a href="table.php">
										<h3>Applications</h3>
										<p>Registered Applicants </a></p>
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
										<a href="confirm_pay.php">
										<h3>Payments</h3>
										<p>Confirm received Payments<a href="http://drbl.in/eQva"></a></p>
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
									<div class="ch-info-back" data-toggle="modal" data-target="#itemmaster">
										<h3>Item Master</h3>
										<p>Create new Items</p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>

				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-4">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-4"></div>
									<div class="ch-info-back">
										<a href="itemManager.php">
										<h3>Item Manager</h3>
										<p>Checkout items created!</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="ch-item ch-img-5">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-5"></div>
									<div class="ch-info-back">
										<a href="OrderHistory.php">
										<h3>Sales History</h3>
										<p>View the orders Placed!</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>

			</section>

			</br></br></br></br></br></br>
   <!--Modal: Item-Master Form-->
   <div class="modal fade" id="itemmaster" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog cascading-modal " role="document">
        <form id = "process" >
				  <!--Content-->
          <div class="modal-content">
            <div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="form-header  purple darken-4">
            <h3><i class="fa fa-lock"></i> Item Manager</h3>
        </div>

        <!--Body-->

            <div class="modal-body">
                		<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="md-form form-group ">
                            	<label for="cat">Category</label>
                                <input type="text" id="cat" name="cat" class="form-control" >
                            </div>
                        </div>
                    </div>


                		<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="md-form form-group ">
                            	<label for="item">Item</label>
                                  <input type="text" id="item" name="item" class="form-control" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                         <div class="md-form form-group">
                              <label for="price">Price</label>
                                  <input type="text" id="price" name="price" class="form-control" >
                          </div>
                        </div>

										</div>
						<!--Footer-->
						<div class="modal-footer">
								<div class="options">

								</div>
								<button type="button" class="btn btn-primary"  value="create" id="save" name="save" >Create</button>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close <i class="fa fa-times-circle ml-1"></i></button>

						</div>

      </div>

          <!--/.Content-->
      </div>
             </div>
           </div>
				</form>
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
