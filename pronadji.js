var xmlHttp;
function PrikaziZonu(str){ 
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null){
 alert ("Browser ne podržava xmlHttpRequest");
 return;
}
var url="prikazi_zonu.php";
url=url+"?id_zap="+str;
//ne dozvoli keširanje 
url=url+"&sid_zap="+Math.random();
//obrada promene stanja objekta xmlHttpRequest
xmlHttp.onreadystatechange=obradapromenestanja;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}
function obradapromenestanja(){ 
if (xmlHttp.readyState==4){ 
 document.getElementById("popuni").innerHTML=xmlHttp.responseText;
 } 
}
function GetXmlHttpObject(){
var xmlHttp=null;
try{
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 } catch (e){
 //Internet Explorer
 try {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
 } catch (e) {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}
