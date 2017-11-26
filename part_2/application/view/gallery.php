<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv='Content-Type' content='text/html;charset=utf-8'></meta>
	<title>Virtual Museum</title>
	
	 <!-- Bootstrap -->
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/custom.css" rel="stylesheet">
	<link rel='stylesheet' type='text/css' href='./css/x3dom.css'></link>
	
</head>
<body id="homeBody">
	<div id="header" class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="logo">
				<a class="navbar-brand" href="./home">
					<img src="./assets/images/logoPH.png"></img>
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
					<li><a href="#" class="active">Gallery</a></li>
					<li><a href="#">Contact</a><li>
				</ul>
			</div>
		</div>
		</div>
	</div>
	
	<div id="mainBody"> 
		<div class = "row">
			<div id="gallery">
				
			</div>
		</div>
		<div class = "row">
			<div id="homeTxt">
				<h2> Virtual Museum of Medieval Weapons</h2>
				<p> Welcome to the virtual museum for medieval weapons. Above is a sample gallery of the various medieval
				weapons that have existed. Please click in the gallery link at the top right of the page to get to the 
				3D models or click the link below to download them as a zip file! </p>
			</div>
		</div>
		<div class = "row">
			<div id="downloadLinks">
				<h3> <a href="#" download> Download Models</a></h3>
			</div>
		</div>
		
	</div>
	<div class = "footer" id="footer">
		<div class="container">
			<div class="navbar-text navbar-left">
				<p> &copy 2017 Mobile Web 3D Applications | 
				Assignment 2 |
				<a href="#">References</a>
				</p>
				
			</div>
			<div class="navbar-text navbar-right">
				<a href="https://www.facebook.com/cocacolaGB/"><i class="fa fa-facebook-square fa-2x"></i></a>
				<a href="https://twitter.com/CocaCola"><i class="fa fa-twitter fa-2x"></i></a>
				<a href="https://plus.google.com/+Coca-Cola"><i class="fa fa-google-plus fa-2x"></i></a>
			</div>
		</div>
	</div>
	
	
	  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="./js/jquery-3.1.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="./js/bootstrap.min.js"></script>	
	<script type='text/javascript' src='./js/x3dom.js'></script>
	<script src="./js/gallery_generator.js"></script>
</body>
</html>