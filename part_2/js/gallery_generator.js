function getXMLHttp(){
	var xmlHttp
	try {
		xmlHttp = new XMLHttpRequest ();
	} catch (e){
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e){
				return false;
			}
		}
	}
	return xmlHttp;
}
var xmlHttp = getXMLHttp();
var numberOfColumns= 4;
var htmlCode = [];
var index = 0;
var response;
$(document).ready(function() {
	var send = "js/hook.php";
	xmlHttp.open("GET", send, true);
	xmlHttp.send(null);
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4){
			//alert(xmlHttp.responseText);	
			response = xmlHttp.responseText.split("~");
			for (var i=0; i < response.length; i++){
				var refCode = "";
				//refCode += '<a href="'+ 'images/' + response[i] + '">';
				refCode += '<img src="images/'+response[i]+'" class="thumbnail"/>';
				//refCode += '</a>';
				htmlCode.push(refCode);
			}
			
		}
		galRefresh();
	
	}
	function galRefresh(){
		if(index >= htmlCode.length){
			index = 0;
		}
		document.getElementById('gallery').innerHTML = htmlCode[index];
		index++;
		setTimeout(galRefresh,3500);
	}
});