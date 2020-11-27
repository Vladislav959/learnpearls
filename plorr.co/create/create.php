<?php
$widgettext = $_POST['widgettext'];
$crosscolor = $_POST['crosscolor'];
$widgettextcolor = $_POST['widgettextcolor'];
$widgetbackground = $_POST['widgetbackground'];
$widgetbutton = $_POST['widgetbutton'];
$widgetbuttonbackground = $_POST['widgetbuttonbackground'];
$widgetbuttoncolor = $_POST['widgetbuttoncolor'];
$widgetbuttoncolorhover = $_POST['widgetbuttoncolorhover'];
$widgetbuttonbackgroundhover = $_POST['widgetbuttonbackgroundhover'];
$widgetbuttoncolorfocus = $_POST['widgetbuttoncolorfocus'];
$widgetbuttonbackgroundfocus = $_POST['widgetbuttonbackgroundfocus'];
$widgetstar = $_POST['widgetstar'];
$widgetdot = $_POST['widgetdot'];
if($_POST['widgettype'] == 'instagram'){
    $iconsrc = '/icons/instagram.svg';
}
elseif($_POST['widgettype'] == 'twitter'){
    $iconsrc = '/icons/twitter.svg';
}
elseif($_POST['widgettype'] == 'facebook'){
    $iconsrc = '/icons/facebook.svg';
}
elseif($_POST['widgettype'] == 'producthunt'){
    $iconsrc = '/icons/producthunt.svg';
}
elseif($_POST['widgettype'] == 'dribbble'){
    $iconsrc = '/icons/dribbble.svg';
}
$result = '<meta charset="utf-8"><style>
@font-face {
    font-family:"Golos";
    src: url("/golos.ttf");
}
:focus{
    outline:none;
}
.mainh{
margin-top:75px;
}
body{
    font-family:"Golos";
 font-size:1.1em;
}

.acti_widget{
background:' . $widgetbackground . ';
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
color:' . $widgetbuttoncolor . ';
background:' . $widgetbuttonbackground . ';
border:none;
font-size:1em;
font-family:"Golos";
Padding:9.5px;
transition:all .3s ease-in;
border-radius:0.9rem;
}
.acti_button button:hover{
background:' . $widgetbuttonbackgroundhover . ';
color:' . $widgetbuttoncolorhover . ';
}
.acti_button button:focus{
background:' . $widgetbuttonbackgroundfocus . ';
color:' . $widgetbuttoncolorfocus . ';
}
.acti_text{
    margin:0;
    color:' . $widgettextcolor . ';
text-align:center;
}
.acti_cross{
   position:absolute;
   right: 13px;
    top: 13px;
}
.acti_cross svg path{
    fill:' . $crosscolor . ';
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
    <div class="acti_customicon"><img src="'. $iconsrc . '"></div>
<p class="acti_text">' . $widgettext . '</p>
<div class="acti_button"><button>' . $widgetbutton . '</button></div>
<div class="acti_cross" id="acti_cross"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M23 20.168l-8.185-8.187 8.185-8.174-2.832-2.807-8.182 8.179-8.176-8.179-2.81 2.81 8.186 8.196-8.186 8.184 2.81 2.81 8.203-8.192 8.18 8.192z"/></svg></div>
<script>
  var locationRequest = "/clicktodb.php"; 
var request;
function createRequest() {
	if (window.XMLHttpRequest) request = new XMLHttpRequest();
	else if (window.ActiveXObject) {
		try {
			request = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e){}											
		try {													
			request = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (e){}
	}
	return request;
}
 
function sendRequest(locationRequest, parameters) {
	request = createRequest();
	if (request) {
	request.open("POST", locationRequest, false);
	request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	request.send(parameters);
	
	} else {
		alert("Браузер не поддерживает технологию AJAX");
	}
}
 
// использование

var widget = document.querySelector(".acti_widget");
var cross = document.querySelector(".acti_cross");
var button = document.querySelector(".acti_button");
var widgetclosed = localStorage.getItem("widgetclosed");
if(widgetclosed == 1){
    widget.style.transform = "translateY(190px)";
}
function handlercross() {
    widget.style.transform = "translateY(190px)";
    widget.style.transition = "all .35s ease-in";
    localStorage.setItem("widgetclosed", 1);
sendRequest(locationRequest,"closed=1");
  }
  function handlerclick() {
   sendRequest(locationRequest,"clicked=1");
  }
  cross.addEventListener("click", handlercross);
  button.addEventListener("click", handlerclick);
  
</script>
';
$f = fopen($_SERVER['DOCUMENT_ROOT'] . "/result.php", "w");
fwrite($f, $result);
fclose($f);
?>