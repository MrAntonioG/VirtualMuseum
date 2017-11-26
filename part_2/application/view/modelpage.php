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
					<li><a href="#">Gallery</a></li>
					<li><a href="mailto:virtualhmuseum@gmail.com?Subject=Enquiry">Contact</a><li>
					<li><a href="../index.php/admin">Admin</a></li>
				</ul>
			</div>
		</div>
		</div>
	</div>
	
	<div id="mainBody"> 
		<div class = "row">
			<div id="model_holder">
				<div class="col-xs-2 col-sm-2"> <!--Camera Controls-->
					<div class="cameraBtns">
						<h4>Camera Controls</h4>
						<div class="btn-group-vertical">
							<button type="button" class="btn btn-primary btn-responsive" nameSpaceName="model" mapDEFToID="true" onclick="cameraFront();">Front</button>
							<button type="button" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</button>
							<button type="button" class="btn btn-primary btn-responsive" onclick="cameraLeft();">Left</button>
							<button type="button" class="btn btn-primary btn-responsive" onclick="cameraRight();">Right</button>
							<button type="button" class="btn btn-primary btn-responsive" onclick="cameraTop();">Top</button>
							<button type="button" class="btn btn-primary btn-responsive" onclick="cameraBottom();">Bottom</button>
							<!--<button type="button" class="btn btn-primary btn-responsive" onclick="headlight();">Headlight</button>-->
							<button type="button" class="btn btn-primary btn-responsive" onclick="wireframe();">Wireframe</button>
						</div>
					</div>
				</div>
				<div class="col-xs-8 col-sm-8"> <!--3d Model-->
					<div id="Model3D" class='model3D'>
						<x3d id="modelx3D">
							<scene DEF='scene'>
								<inline id="mace" render='true' load='true' nameSpaceName='model' mapDEFToID="true" url='../assets/models/mace/mace.x3d'></inline>
								<inline id="sword" render='false' load='false' nameSpaceName='model' mapDEFToID="true" url='../assets/models/sword/sword.x3d'></inline>
								<inline id="halberd" render='false' load='false' nameSpaceName='model' mapDEFToID="true" url='../assets/models/halberd/halberd.x3d'></inline>
								<inline id="shield" render='false' load='false' nameSpaceName='model' mapDEFToID="true" url='../assets/models/shield/shield.x3d'></inline>

							</scene>
						</x3d>
					</div>
				</div>
			</div>
		</div>
		<div class = "row">
			<div class = "row" id="title">
				<h3> Description </h3>
			</div>
			<div class="row" id="modelInfo">
				
			</div>
		</div>
		<div class = "row">
			<div id="modelGallery">
				<img src="../assets/images/mace.PNG" onclick="mace();"></img>
				<img src="../assets/images/sword.PNG" onclick="sword();" ></img>
				<img src="../assets/images/halberd.jpg" onclick="halberd();"></img>
				<img src="../assets/images/shield.jpg" onclick="shield();" ></img>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../js/bootstrap.min.js"></script>	
		
	<script type='text/javascript' src='../js/x3dom.js'></script>
	<script src="../js/modelInteraction.js"></script>
	<script src="../js/modelGallery.js"></script>
</body>
</html>