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
	<meta charset="utf-8">
	<link rel="icon" href="/logo.png?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/logo.png')?>">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Стихи | Памятные Жемчужины</title>
	<meta name="description" content='Здесь собраны более 150 Памятных Жемчужин для всех годов проведения конкурса "Памятные Жемчужины."'>
	<meta name="author" content="LearnPearls">
<meta property="og:type" content="website">
<meta property="og:title" content="LearnPearls">
<meta property="og:site_name" content="learnpearls.ru">
<meta property="og:url" content="http://learnpearls.ru/archive/">
<meta property="og:description" content='С LearnPearls вы легко подготовитесь к конкурсу "Памятные Жемчужины". Здесь есть стихи из Библии для всех годов. С удобным интерфейсом, специальными тестами и большим количеством функций вам будет легче учить Памятные Жемчужины.'>
<meta property="og:image" content="https://learnpearls.ru/ogimage2.png">
<meta property="og:locale" content="ru">
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:card" content="summary_large_image">
<meta name="twitter:creator" content="@gubarev_dev">
<meta name="twitter:url" content="https://learnpearls.ru/archive/">
<meta name="twitter:title" content="LearnPearls">
<meta name="twitter:description" content='С LearnPearls вы легко подготовитесь к конкурсу "Памятные Жемчужины". Здесь есть стихи из Библии для всех годов. С удобным интерфейсом, специальными тестами и большим количеством функций вам будет легче учить Памятные Жемчужины.'>
<meta name="twitter:image" content="https://learnpearls.ru/ogimage2.png">
<link rel="stylesheet" type="text/css" href="/archive/style.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/archive/style.css')?>">
<link rel="stylesheet" type="text/css" href="/main.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/main.css')?>">
</head>
<body>
    <?php 
include($_SERVER['DOCUMENT_ROOT'] . "/archive/darkstyles.php");
include($_SERVER['DOCUMENT_ROOT'] . "/warning.php");?>
<section class="page">
	<div class="header">
		<p class="notmargin">Стихи</p></div>

	<a href-data="/archive/20/">
	<div class="cart first" style="background:linear-gradient(120deg,#46a3f0, #2196f3)">
		<p class="year">2020 год</p>
		<p>4 сезон</p>
	</div></a>
	<a href-data="/archive/21/">
	<div class="cart" style="background:linear-gradient(120deg,#de2ae4, #d32dd8)">
		<p class="year">2021 год</p>
		<p>5 сезон</p>
		</div></a>
		<a href-data="/archive/22/">
	<div class="cart" style="background: linear-gradient(120deg,#a783e5, #9973d9);">
		<p class="year">2022 год</p>
		<p>6 сезон</p>
	</div></a>


<div class="archived_badge"><p>Архив</p></div>

</div>
<a href-data="/archive/17/">
	<div class="cart archived">
		<p class="year">2017 год</p>
		<p>1 сезон</p>
	</div></a>
	<a href-data="/archive/18/">
	<div class="cart archived">
		<p class="year">2018 год</p>
		<p>2 сезон</p>
	</div></a>
	<a href-data="/archive/19/">
	<div class="cart archived">
		<p class="year">2019 год</p>
		<p>3 сезон</p>
	</div></a>
	<div class="dop_block"></div></section>
<div class="buttons">
	    	<a href-data="/" class="a1"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg></button></a>
		<div class="a2 active"><button><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><g><rect fill="none" height="24" width="24"/></g><g><g/><g><path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.7,0-4.15,0.65-5.5,1.5V8c1.35-0.85,3.8-1.5,5.5-1.5c1.2,0,2.4,0.15,3.5,0.5V18.5z"/><g><path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.7,0-3.24,0.29-4.5,0.83v1.66 C14.13,10.85,15.7,10.5,17.5,10.5z"/><path d="M13,12.49v1.66c1.13-0.64,2.7-0.99,4.5-0.99c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24 C15.8,11.66,14.26,11.96,13,12.49z"/><path d="M17.5,14.33c-1.7,0-3.24,0.29-4.5,0.83v1.66c1.13-0.64,2.7-0.99,4.5-0.99c0.88,0,1.73,0.09,2.5,0.26v-1.52 C19.21,14.41,18.36,14.33,17.5,14.33z"/></g></g></g></svg></button></div>
		<a href-data="/settings/" class="a3"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg></button></a>
		<a href-data="/starlist/" class="a5"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg></button></a>
		<a href-data="/tests/" class="a4"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zM10 9h8v2h-8zm0 3h4v2h-4zm0-6h8v2h-8z"/></svg></button></a>
	</div>
<script type="text/javascript" src="/animate.js?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/animate.js')?>"></script>
</body>
</html>