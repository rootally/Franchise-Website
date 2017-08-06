<!DOCTYPE html>
	<?php session_start();?>
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
    <!-- Material Design Bootstrap -->

		<script src="js/jquery-1.12.3.min.js" type="application/javascript"></script>

	<script type="application/javascript">

		var global,sum=0,str="";
	 	$(document).ready(function()
	{
		$("#cat").change(items);
		$("#cat").change(price);

			$.getJSON('receiveOrderProcess.php',function(jsonAry)
			 	{
					global=jsonAry;
					var lookup = {};
					var tt=$("#cat").val();
					//alert(JSON.stringify(jsonAry));

					if(jsonAry.length==0)
						alert("No Record Found");
					else
						{

							$("#cat").empty();
							for(i=0;i<jsonAry.length;i++)
								{
									var row=$('<option>');
									var name = jsonAry[i].cat;
									if (!(name in lookup))
									{
										lookup[name] = 1;
									  row.append("<option>"+jsonAry[i].cat);
										$("#cat").append(row);
									}
								}
								items();
								price();


						}
				 });
			function items()
			{
				$.getJSON('receiveOrderProcess.php',function(jsonAry)
			 	{

					var tt=$("#cat").val();
					//alert(JSON.stringify(jsonAry));

					if(jsonAry.length==0)
						alert("No Record Found");
					else
					{

								$("#items").empty();

									for(i=0;i<jsonAry.length;i++)
										{
											var row1=$('<option>');
											if (jsonAry[i].cat == tt)
											{
												row1.append("<option>"+jsonAry[i].item);
												$("#items").append(row1);
											}
										}
						}
				 });
			}

			function price()
			{
				$.getJSON('receiveOrderProcess.php',function(jsonAry)
			 	{

					var tt=$("#cat").val();

					if(jsonAry.length==0)
						alert("No Record Found");
					else
					{

								$("#price").empty();

									for(i=0;i<jsonAry.length;i++)
										{
											var row1=$('<option>');
											if (jsonAry[i].cat == tt)
											{
												row1.append("<option>"+jsonAry[i].price);
												$("#price").append(row1);
											}
										}

					}
				 });
			}

			$("#add").click(doAdd2);

	function doAdd2()
		{
			var i;
			var tek= document.getElementById("items");
			var fee= document.getElementById("price");



			for(i=0;i<tek.length;i++)
			  {
				if(tek[i].selected==true)
				{
					str+=tek[i].value+",";
					$("#sitems").append("<option value="+tek[i].value+">"+tek[i].value+"</option>");
					fee[i].selected=true;
					$("#sprice").append("<option value="+fee[i].value+">"+ fee[i].value+"</option>");
					sum=sum+parseInt(fee[i].value);
				}
			}

			$("#tbill").val(sum);

		}

		 $("#bill").click(function()
			{
				document.getElementById("tot").style.display="none";
			 });




		$("#save").click(save);

			function save()
			{
							//alert("hello");
				str=str.substring(0,str.length-1);

         //alert(str);
				var url="SaveOrderProcess.php?fid="+$("#fid").val()+"&item="+str+"&bill="+$("#tbill").val();
				$.get(url,function(data,status)
				{
					//$("#txtData").html(data);

        });
				alert("Order Successfully Placed!");
				location.href="receiveOrder.php";
			}


	});

	</script>


  </head>
	<br><br><br><br>
  <body background=img/back2.jpg >
    <!--header-->
    <header  id="header">
        <div class="bg-color" >
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
                               <li class="active"><button type="button" class="btn btn-primary"onclick="location.href = 'Flogin.php';">Home</button></li>
                                <li><button type="button" class="btn btn-unique"onclick="location.href = 'fOrderHistory.php';">Order History</button></li>
                           </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!--/ nav-->
						 </div>
		</header>
		<br><br><br><br>
						<center><img src="img/order.png" width=300px height=300px class="img-responsive"></center>

		<div class="container text-center" style="margin-top:-150px">
            <div class="wrapper wow fadeInUp delay-05s" >

									<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="md-form form-group ">
                            	<label for="fid">Franchise Id</label>

                               <input type="text" readonly value='<?php echo $_SESSION["user"]?>' id="fid" name="fid" class="form-control" >
                            </div>
                        </div>
											</div>


								<div class="row">
			            	<div class="col-md-8 col-md-offset-2">
                            	<div class="form-group ">
																<label for="cat">Category</label>
																<select class="unselected form-control"style="height:50px"  id="cat">
																</select>
															</div>
                        </div>
                    </div>


            <div class="row">
               <div class="col-md-4 col-md-offset-2">
					  			<label for="items">Items</label>
						  		<select class="unselected form-control"   id="items" style="height: 100px; width: 100%;" multiple="">
									</select>
							 </div>

                <div class="col-md-4">
									<label for="price">Price</label>
								 <select class="unselected form-control" id="price" style="height: 100px; width: 100%;" multiple="">
									</select>
					    </div>
						</div>


						<button type="button" class="btn btn-danger" id="add">Add!</button>

		         <div class="row">
               <div class="col-md-4 col-md-offset-2">
					  			<label for="sitems">Selected Items</label>
						  		<select class="unselected form-control"   id="sitems" style="height: 100px; width: 100%;" multiple="">
									</select>
							 </div>

                <div class="col-md-4">
									<label for="sprice">Price</label>
								 <select class="unselected form-control" id="sprice" style="height: 100px; width: 100%;" multiple="">
										</select>
					    </div>
						</div>


							<div class="row">
               <div class="col-md-8 col-md-offset-2">
							     	<div class="md-form form-group ">
                         	<center><label for="tbill">Total Bill</label></center>
													<br>
                           <input type="text" id="tbill" name="tbill" class="form-control" >
                       </div>

							 </div>
							</div>
						<div class="row">

						<button type="button" class="btn btn-primary" id="save" name="save">Add to Cart!</button>
					</div>
		   </div>
		</div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

  </body>
</html>
