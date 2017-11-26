//Turn off all other models and assign the correct entry to modelinfo
function sword()
{
	var mod = document.getElementById('mace');
	mod.setAttribute('render', 'false');
	mod.setAttribute('load', 'false');
	
	 mod = document.getElementById('halberd');
	mod.setAttribute('render', 'false');
	mod.setAttribute('load', 'false');
	 mod = document.getElementById('shield');
	mod.setAttribute('render', 'false');
	mod.setAttribute('load', 'false');
	 mod = document.getElementById('sword');
	mod.setAttribute('render', 'true');
	mod.setAttribute('load', 'true');
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
		info.innerHTML = "";
		info.innerHTML = swordTxt;
		
}

//Turn off all other models and assign the correct entry to modelinfo
function mace()
{
	var mod = document.getElementById('sword');
	mod.setAttribute('render', 'false');
	mod.setAttribute('load', 'false');
	 mod = document.getElementById('halberd');
	mod.setAttribute('render', 'false');
	mod.setAttribute('load', 'false');
	 mod = document.getElementById('shield');
	mod.setAttribute('render', 'false');
	mod.setAttribute('load', 'false');
	 mod = document.getElementById('mace');
	mod.setAttribute('render', 'true');
	mod.setAttribute('load', 'true');
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
		info.innerHTML = "";
		info.innerHTML = maceTxt;
		
}

//Turn off all other models and assign the correct entry to modelinfo
function halberd()
{
	var mod = document.getElementById('sword');
	mod.setAttribute('render', 'false');
	mod.setAttribute('load', 'false');
	 mod = document.getElementById('mace');
	mod.setAttribute('render', 'false');
	mod.setAttribute('load', 'false');
	 mod = document.getElementById('halberd');
	mod.setAttribute('render', 'true');
	mod.setAttribute('load', 'true');
	 mod = document.getElementById('shield');
	mod.setAttribute('render', 'false');
	mod.setAttribute('load', 'false');
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
	//document.getElementById('model__CameraLeft').setAttribute('position', '-2000 350 0');
		info.innerHTML = "";
		info.innerHTML = halTxt;
		
}

//Turn off all other models and assign the correct entry to modelinfo
function shield()
{
	var mod = document.getElementById('sword');
	mod.setAttribute('render', 'false');
	mod.setAttribute('load', 'false');
	mod = document.getElementById('mace');
	mod.setAttribute('render', 'false');
	mod.setAttribute('load', 'false');	
	 mod = document.getElementById('halberd');
	mod.setAttribute('render', 'false');
	mod.setAttribute('load', 'false');
	 mod = document.getElementById('shield');
	mod.setAttribute('render', 'true');
	mod.setAttribute('load', 'true');
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
		info.innerHTML = "";
		info.innerHTML = shieldTxt;
		
}
var info = document.getElementById("modelInfo");
var shieldTxt = "";
var swordTxt = "";
var maceTxt = "";
var halTxt = "";
// JavaScript Document
$(document).ready(function(){
	console.log("A: hello");
	 //AJAX service request to get the main text data from the json data store
	 $.getJSON('../data/data.json', function(jsonObj) {
		 
		console.log("A: are we there yet?");
		//console.log(jsonObj);
		
		console.log("B: we should be");
		//Each of the entries are assigned to strings 
		swordTxt += '<p> <h5> Name: </h5> ' + jsonObj.modelInfo[0].name + '</br>';
		swordTxt += '<h5> Origin: </h5> ' + jsonObj.modelInfo[0].origin + '</br>';
		swordTxt += '<h5> Usage Date: </h5> ' + jsonObj.modelInfo[0].date + '</br>';
		swordTxt += '<h5> Description: </h5> ' + jsonObj.modelInfo[0].description + '</br> </p>';
		
		console.log("A: We're taking too long");
		maceTxt += '<p> <h5> Name: </h5> ' + jsonObj.modelInfo[1].name + '</br>';
		maceTxt += '<h5> Origin: </h5> ' + jsonObj.modelInfo[1].origin + '</br>';
		maceTxt += '<h5> Usage Date: </h5> ' + jsonObj.modelInfo[1].date + '</br>';
		maceTxt += '<h5> Description: </h5> ' + jsonObj.modelInfo[1].description + '</br> </p>';
		
		halTxt += '<p> <h5> Name: </h5> ' + jsonObj.modelInfo[2].name + '</br>';
		halTxt += '<h5> Origin: </h5> ' + jsonObj.modelInfo[2].origin + '</br>';
		halTxt += '<h5> Usage Date: </h5> ' + jsonObj.modelInfo[2].date + '</br>';
		halTxt += '<h5> Description: </h5> ' + jsonObj.modelInfo[2].description + '</br> </p>';
		
		shieldTxt += '<p> <h5> Name: </h5> ' + jsonObj.modelInfo[3].name + '</br>';
		shieldTxt += '<h5> Origin: </h5> ' + jsonObj.modelInfo[3].origin + '</br>';
		shieldTxt += '<h5> Usage Date: </h5> ' + jsonObj.modelInfo[3].date + '</br>';
		shieldTxt += '<h5> Description: </h5> ' + jsonObj.modelInfo[3].description + '</br> </p>';
		
		console.log("B: We're almost there");
		//modelInfo is assigned the string containing the entry for mace
		info.innerHTML = "";
		info.innerHTML = maceTxt;
		
		console.log("A: Finally here");
 	 
	 });
});
