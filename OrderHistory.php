<!DOCTYPE html>
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
    <!-- Material Design Bootstrap -->

	<script type="application/javascript">

		$(document).ready(function(e) {

			$("#comboFID").change(loadAll);
            function loadAll()
			{
				$.getJSON("JSONOrderHistoryProcess.php?fid="+$("#comboFID").val(),function(jsonAry){
					$("#tbl").empty();
					if(jsonAry[0].msg=="norecord")
					{
						$("#tbl").append("<tr class='bg-primary'><th>Name<th>Mobile<th>Email<th>Status<th>Action");
							return;
					}
					global=jsonAry;

					if(jsonAry.length==0)
						alert("No Record Found");
					else
					{

						$("#tbl").append("<tr class='bg-primary'><th>Items<th>Bill<th>Date of Billing");
						for(i=0;i<jsonAry.length;i++)
						{
							var row=$('<tr class="bg-warning">');

							row.append("<td>"+jsonAry[i].items);
							row.append("<td>"+jsonAry[i].bill);
							row.append("<td>"+jsonAry[i].DoB);

							$("#tbl").append(row);

						}

					}

				});
			}




		});
		function loadFID()
		{
			$.getJSON("JSONFillFid.php",function(jsonAry){

				if(jsonAry[0].msg=="norecord")
					return;
				global=jsonAry;

				if(jsonAry.length==0)
					alert("No Record Found");
				else
				{
					$("#comboFID").empty();
					$("#comboFID").append("<option value='none'>Select</option>");
					for(i=0;i<jsonAry.length;i++)
					{
						$("#comboFID").append("<option value='"+global[i].uname+"'>"+global[i].uname+"</option>");
					}
				}

			});
		}

	</script>
	<style type="text/css">
            .x{
                font-family:"Courier New", Courier, monospace;
            }
    </style>
</head>
  <body background=img/back2.jpg onload="loadFID();"">
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
                               <li class="active"><button type="button" class="btn btn-indigo"onclick="location.href = 'owner.php';">Go back!</button></li>
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

		<div class="row x">
			<div class="col-md-3 col-md-offset-4 form-group">
				<label for="comboFID">FID</label>
				<select name="comboFID" id="comboFID" class="form-control">
					<option value="none">Select</option>
				</select>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<table id="tbl" width=100% rules="all" class="table table-bordered table-hover x">

				</table>

			</div>
		</div>

		</div>
	</div>


</body>
</html>
