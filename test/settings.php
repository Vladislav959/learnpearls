<!DOCTYPE html>
<html>
<head>
    <?php
if(isset($_COOKIE['isdark']) and $_COOKIE['isdark']=="yes"){
echo '<meta name="theme-color" content="#1c1d26">
';}
        function isMobile() { 

return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

if(isMobile()){include ($_SERVER['DOCUMENT_ROOT'] . "/mob.php");}
else {include ($_SERVER['DOCUMENT_ROOT'] . "/notmob.php");}

?>
	<link rel="icon" href="/logo.png?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/logo.png')?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="/style.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/style.css')?>">
<link rel="stylesheet" type="text/css" href="/main.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/main.css')?>">
	<title>Памятные Жемчужины</title>
	<script type="text/javascript" src="lines.js?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/lines.js')?>"></script>
</head>
<body>
    <style>
        .buttons svg {
	width: 26px;
	height:26px;
}
.buttons button{
    width:calc((100vw - 29px) / 5);
}
.a5{
    float:left;
}
.a5 svg{
    width:31px;
    height:31px;
}
.a5 button{
        padding: 0;
    padding-top: 10px;
    padding-bottom: 9px;
}

    </style>
<?php 
 include($_SERVER['DOCUMENT_ROOT'] . "/warning.php");
if(isset($_COOKIE['isdark']) and $_COOKIE['isdark']=="yes"){
echo '<style>
body{background-color:#1c1d26;}
.buttons{background-color:black;box-shadow: -10px -10px 15px rgb(70 70 70 / 50%), 10px 10px 15px rgb(242 242 242 / 12%);}
.header{background-color: #1c1d26;}
h1,h2,h3,h4,h5,p,li,hr{color:#b0b0b0;}
</style>';
}
elseif($_COOKIE['isdark']=="no" or !isset($_COOKIE['isdark'])){
echo '<style>
body{background:white}
.header{background:#02b478;}
.buttons{background:white;box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
h1,h2,h3,h4,h5,p,li,hr{color:#6f6f6f;}
</style>';}
$month = date("n");
 
$quarter = ceil($month / 3);
?>
<section class="page">
	<div class="header">
		<p>Ошибка</p>
		<div class="starlist"><a href-data="/starlist"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg></a></div>
	</div>
<h2 style="margin-top:70px;text-align:center;font-weight:400">Не найдено</h2>
	<div class="dop_block"></div></section>
	<div class="buttons">
	    	<a href-data="home.php" class="a1"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#6f6f6f"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg></button></a>
		<a href-data="archive.php" class="a2"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#6f6f6f"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/></svg></button></a>
		
		    <a href-data="settings.php" class="a3 active"><button><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="#02b478"><g><path d="M0,0h24v24H0V0z" fill="none"/><path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"/></g></svg></button></a>
	<a href-data="star.php" class="a5 active"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#6f6f6f"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg></button></a>
		<a href-data="index.php" class="a4"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#6f6f6f"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zM10 9h8v2h-8zm0 3h4v2h-4zm0-6h8v2h-8z"/></svg></button></a>
	</div>
<script type="text/javascript" src="/animate.js?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/animate.js')?>"></script>
</body>
</html>