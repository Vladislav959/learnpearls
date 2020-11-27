<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<title>Not found - Vladislav Gubarev - Web developer</title>
</head>
<body><style>
@font-face {
    font-family:'Golos';
    src: url('/golos.ttf');
}
:focus{
    outline:none;
}
.mainh{
margin-top:75px;
}
body{
    font-family:'Golos';
 font-size:1.1em;
}

.acti_widget{
background:#f0f0f0;
border-radius:0.9rem;
padding:15px;
width:350px;
position:fixed;
bottom:20px;
left: 50%;
    margin-left: -175px;
}
.acti_button{
  text-align:center;
    margin-top:15px;
}
.acti_button button{
color:black;
background:white;
border:none;
font-size:1em;
font-family:'Golos';
Padding:9.5px;
transition:all .3s ease-in;
border-radius:0.9rem;
}
.acti_button button:hover{
background:#469afa;
}
.acti_button button:focus{
background:#0b6fe0;
}
.acti_text{
    margin:0;
text-align:center;
}
.acti_cross{
   position:absolute;
   right:15px;
   top:10px;
}
.acti_customicon{
    width:43px;
    height:43px;
    margin:auto;
    margin-top:5px;
    margin-bottom:15px;
}
.acti_customicon img{
    width:100%;
}
</style>
<h2 class="mainh">Not found</h2>
</div>
<div class="acti_widget">
    <div class="acti_customicon"><img src="/twitter.svg"></div>
<p class="acti_text">Subscribe me on Twitter:
</p>
<div class="acti_button"><button>Subscribe</button></div>
<div class="acti_cross" id="acti_cross"><i class="fa fa-times"></i></div>
<script>
  var locationRequest = '/clicktodb.php'; 
/*Попытаемся создать код мультиплатформенным.
IE и нормальные браузеры создают объект XMLHttpRequest по разному.
Кроме того, разные версии IE его создают по разному.
Придётся повторить операцию для всех.
*/
var request;
function createRequest() {
// Это для адекватных современных браузеров
	if (window.XMLHttpRequest) request = new XMLHttpRequest();
// Internet Explorer
	else if (window.ActiveXObject) {
// IE разных версий		
		try {
			request = new ActiveXObject('Msxml2.XMLHTTP');
		} catch (e){}											
		try {													
			request = new ActiveXObject('Microsoft.XMLHTTP');
		} catch (e){}
	}
	return request;
}
 
function sendRequest(locationRequest, parameters) {
	// Создаем запрос
	request = createRequest();
	if (request) {
// Посылаем POST-запрос. 
// Указываем адрес, false - асинхронный режим выключен
	request.open("POST", locationRequest, false);
	// Отправляем дополнительно header, т.к. метод POST
	request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	// Отправляем запрос с параметрами 
	//(несколько параметров разделять &)
	request.send(parameters);
	
	} else {
		alert("Браузер не поддерживает технологию AJAX");
	}
}
 
// использование

var widget = document.querySelector('.acti_widget');
var cross = document.querySelector('.acti_cross');
var button = document.querySelector('.acti_button');
var widgetclosed = localStorage.getItem("widgetclosed");
if(widgetclosed == 1){
    widget.style.transform = "translateY(75px)";
}
function handlercross() {
    widget.style.transform = "translateY(75px)";
    widget.style.transition = "all .35s ease-in";
    localStorage.setItem("widgetclosed", 1);
sendRequest(locationRequest,'closed=1');
  }
  function handlerclick() {
   sendRequest(locationRequest,'clicked=1');
  }
  cross.addEventListener("click", handlercross);
  button.addEventListener("click", handlerclick);
  
</script>
</body>
</html>