<?php /*session_start();if(isset($_SESSION['modalclosed'])){setcookie('modalclosed',1,60*60*24*30,'/');session_destroy();}*/?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="description" content='LearnPearls - сайт, созданный для помощи и подготовки следопытов к конкурсу "Памятные Жемчужины". На нём собраны более 235 стихов из Библии.'>
<meta name="keywords" content="пж, памятные жемчужины, жемчужины, Библия, учить пж, учить памятные жемчужины, пж 2020 год, пж 2020, памятные жемчужины 2020, учить пж 2020 года, учить пж 2020, учить памятные жемчужины 2020 года, стихи из Библии, следопыты, следопыт, клуб следопыт, адвентист, адвентисты, выучить пж, выучить памятные жемчужины, выучить стихи из Библии, подготовиться к памятным жемчужинам">

    <?php
if(isset($_COOKIE['isdark']) and $_COOKIE['isdark']=="yes"){
echo '<meta name="theme-color" content="black">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-transcluent" />
';}
        function isMobile() { 

return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

if(isMobile()){include ($_SERVER['DOCUMENT_ROOT'] . "/mob.php");}
else {include ($_SERVER['DOCUMENT_ROOT'] . "/notmob.php");}

?>
<link rel="icon" href="/icon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="/style.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/style.css')?>">
	<title>Памятные Жемчужины</title>
</head>
<body>
    <style>
        .buttons {
	bottom: 24px;
	left:calc(7.5vw - 2px);
	position:fixed;
	border-radius:50vw;
	width: 85vw;
	height: 52px;
	transition:border.3s ease-in;
	border:2px solid #e0dddd;
}

.buttons button {
	border: none;
    height: fit-content;
    width: 21.25vw;
    padding: 12px 0;
}
.buttons button:focus .buttons{
    border-color:#02a66f;
}
.buttons img {
	width: 26px
}

.a1,
.a2 {
	float: left
}

.a3,
.a4 {
	float: right
}
body{
    margin:0;
}
    </style>
<?php 
 include($_SERVER['DOCUMENT_ROOT'] . "/warning.php");
if(isset($_COOKIE['isdark']) and $_COOKIE['isdark']=="yes"){
echo '<style>
.dark_button{margin-right:-99px;}
.dark_text{color:#b0b0b0;}
body{background-color:black;}
.buttons{background-color:#2d2d2d;}
.buttons button{background-color:#2d2d2d;}
.header{background-color: black;}
.yourname{color:#b0b0b0;}
.pwh{color:#b0b0b0;}
.modal-content{background-color:black!important;}
.modal-title{color:white;}
button.close span{color:white;}
.change_input{background-color:black;color:white;}
.drop-down__menu-box{background-color:#2d2d2d;}
.warning li{color:#b0b0b0;}
.warning{background-color:black;}
.warning h3{color:#b0b0b0;}
.actions p{color:#b0b0b0;}
.t1{color:#b0b0b0;}
.welcome{color:#b0b0b0;}
hr{color:#b0b0b0;}
.update h2,.update li,.update p{color:#b0b0b0;}
}
</style>';
}
elseif($_COOKIE['isdark']=="no" or !isset($_COOKIE['isdark'])){
echo '<style>
.dark_button{margin-right:-87px;}
.dark_text{color:#6f6f6f;}
.header{background-color: #02a66f;}
.buttons button{background-color:transparent;}
.buttons{background-color:white;}
.yourname{color:#6f6f6f;}
.pwh{color:#6f6f6f;}
.drop-down__menu-box{background-color:#fff;}
.warning h3{color:#6f6f6f;}
.warning li{color:#6f6f6f;}
.warning{background-color:#f7f7f7;}
.actions p{color:#6f6f6f;}
.t1{color:#6f6f6f;}
.welcome{color:#6f6f6f;}
hr{color:#6f6f6f;}
.update h2,.update li,.update p{color:#6f6f6f;}
</style>';}
?>
	<div class="buttons">
	    	<div class="a1"><button><img src="/home-active.svg"></button></div>
		<a href-data="/archive/" class="a2"><button><img src="/archive.svg"></button></a>
		<a href-data="/settings/" class="a3"><button><img src="/settings.svg"></button></a>
		<a href-data="/tests/" class="a4"><button><img src="/tests.svg"></button></a>
	</div>

</body>
</html>