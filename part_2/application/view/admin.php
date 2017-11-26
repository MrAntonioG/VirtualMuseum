<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv='Content-Type' content='text/html;charset=utf-8'></meta>
	<title>Virtual Museum</title>
	
	 <!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/custom.css" rel="stylesheet">
	<link rel='stylesheet' type='text/css' href='../css/x3dom.css'></link>
	
</head>
<body id="homeBody">
	<div id="header" class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="logo">
				<a class="navbar-brand" href="../index.php">
					<img src="../assets/images/logoPH.png"></img>
				</a>
			</div>

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse colapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">About</a></li>
					<li><a href="../index.php/gallery">Gallery</a></li>
					<li><a href="mailto:virtualhmuseum@gmail.com?Subject=Enquiry">Contact</a><li>
					<li><a href="#" class="active">Admin</a></li>
				</ul>
			</div>
		</div>
		</div>
	</div>
	
	<div id="mainBody"> 
		<div class = "row" id="adminBtns">
			<h3> Database Admin</h3>
			<div class="navbar-collapse colapse">
				<ul class="nav navbar-nav ">
					<li><a href="../index.php/dbBuildTable">Create</a></li>
					<li><a href="../index.php/dbGetData">Read</a></li>
					<li><a href="../index.php/dbInsertData">Update</a></li>
					<li><a href="../index.php/dbDeleteData">Delete Data</a><li>
					<li><a href="../index.php/dbDeleteTable">Delete Table</a><li>
				</ul>
			</div>
		</div>
		<div class = "row">
			<div id="adminRead">
			<p>
				<?php 
				if (is_array($data)){
					 for ($i=0; $i <count ($data); $i++) { ?>
				<tr>
					<td width="300" align="center"> <h2><?php echo $data[$i]['name'] ;?> </h2></td>
					<td width="300" align="center"> <h2><?php echo $data[$i]['origin']; ?> </h2></td>
					<td width="300" align="center"> <h2><?php echo $data[$i]['date'] ;?> </h2></td>
					<td width="300" align="center"> <h2><?php echo $data[$i]['description']; ?> </h2></td>
				</tr>
				<?php } } else { 
					echo $data ;
				}						
				?></p>
			</div>
		</div>
		<div class = "row">
			<div id="downloadLinks">
				<h3> <a href="./assets/part_2.zip" download> Download Code</a></h3>
				<h3> <a href ="./assets/models/models.zip" download> Download 3D Models</a></h3>
			</div>
		</div>
		
	</div>
	<div class = "footer" id="footer">
		<div class="container">
			<div class="navbar-text navbar-left">
				<p> &copy 2017 Mobile Web 3D Applications | 
				Assignment 2 |
				<a href="../index.php/references">References</a>
				</p>
				
			</div>
		</div>
	</div>
	
	
	  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-3.1.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../js/bootstrap.min.js"></script>	
	<script type='text/javascript' src='../js/x3dom.js'></script>
</body>
</html>