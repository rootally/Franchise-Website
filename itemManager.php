<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COGNUT	</title>
		<link rel="icon" href="logo.ico" type="image/x-icon">

    <style>
  .navbar-brand
  {
   margin-top:13px;
  }
  </style>

    <script type="text/javascript" src="jquery-1.8.2.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link href="css/mdb.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Material Design Bootstrap -->

	<script type="application/javascript">
		var global;
			function loadALL()
			{
				$.getJSON('receiveOrderProcess.php',function(jsonAry)
			 	{
					$("#tbl").empty();

					global=jsonAry;
					//alert(JSON.stringify(jsonAry));

					if(jsonAry.length==0)
						alert("No Record Found");
					else
						{

							$("#tbl").append("<tr><th>Category<th>Item<th>Price<th colspan=3>Action");
							for(i=0;i<jsonAry.length;i++)
								{
									var row=$('<tr>');
									//if(jsonAry[i].status==4)
										//var row=$('<tr class="oke">');

									row.append("<td>"+jsonAry[i].cat);
									row.append("<td>"+jsonAry[i].item);
									row.append("<td>"+jsonAry[i].price);
								//row.append("<td><input type='button' value='Edit'");
								row.append("<td><input type='button' class='btn btn-danger' value='Delete!' onClick=doUpdate("+i+")>");

									$("#tbl").append(row);

								}

						}


				 });
			}
			 function doUpdate(index)
			{
				 //alert(global[index].mobile+" "+what);
				 var url="updateOrder.php?item="+ global[index].item;
				 $.get(url,function(data,status)
				{
					 	alert(data);
						loadALL();

				});

			}


	</script>

  </head>
  <body background=img/back2.jpg onload="loadALL();">
    <!--header-->
    <header  id="header">
        <div class="bg-color" style="background-image: url(../img/back1.jpeg)";
	>
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
                                <li class="active"><button type="button" class="btn btn-indigo" onclick="location.href = 'owner.php';">Go back!</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!--/ nav-->

        </div>
    </header>
    <!--/ header-->
    <!---->
				<div class="container text-center">
            <div class="wrapper wow fadeInUp delay-05s" >

                <table class="table table-hover "id="tbl">


								</table>

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
