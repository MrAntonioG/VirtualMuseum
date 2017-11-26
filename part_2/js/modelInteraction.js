//adapted from example code 'benskitchen.com'

var spinning = false;
var wire = false;
function spin()
{
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}
function wireframe()
{
	//wire = !wire;
	var e = document.getElementById('modelx3D');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
	
	}

var lightOn = false;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}

function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}