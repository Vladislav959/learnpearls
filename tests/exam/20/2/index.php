<!doctype html>
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
else {include ($_SERVER['DOCUMENT_ROOT'] . "/notmob.php");}?>
	<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
<link rel="icon" href="/logo.png?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/logo.png')?>">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/tests/exam/teststyle.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/tests/exam/teststyle.css')?>">
<link rel="stylesheet" type="text/css" href="/main.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/main.css')?>">
	<title>2 квартал, 2020 год - Экзамен | Памятные Жемчужины</title>
		
		
</head>
<body>
    <?php 
    include($_SERVER['DOCUMENT_ROOT'] . "/tests/exam/test_darkstyles.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/warning.php")?>
    <section class="page">
<div class="header">
		<div class="back"><a href-data="/tests/exam/"><img src="https://learnpearls.ru/back.png"></a></div>
		<p>2 квартал, 2020 год</p>
	</div>
<div class="quiz_end">
    <h2>Вы закончили экзамен!</h2>
    <p class="quiz_end_result"></p>
    <a><button class="quiz_end_tryagain">Пройти снова</button></a>
    <a href-data="/tests/"><button class="quiz_end_quit">Завершить</button></a>
</div>
        <script>
        var yearforline = 2020;
        var quarterforline = 2;
var lines = ['И сказал Господь Ною: войди ты и всё семейство твоё в ковчег, ибо тебя увидел Я праведным предо Мною в роде сём.#Быт. 7:1','Сия есть заповедь Моя, да любите друг друга, как Я возлюбил вас.#Ин. 15:12','Итак, подражайте Богу, как чада возлюбленные.#Еф. 5:1','Потому оставит человек отца своего и мать свою и прилепится к жене своей; и будут двое одна плоть.#Быт. 2:24','Они же сказали: веруй в Господа Иисуса Христа, и спасешься ты и весь дом твой.#Деян. 16:31','Ибо люди будут самолюбивы, сребролюбивы, горды, надменны, злоречивы, родителям непокорны, неблагодарны, нечестивы, недружелюбны, имеющие вид благочестия, силы же его отрекшиеся. Таковых удаляйся.#2 Тим. 3:2, 5','Если же кто о своих и особенно о домашних не печется, тот отрекся от веры и хуже неверного.#1 Тим. 5:8','Дети, повинуйтесь своим родителям в Господе, ибо сего требует справедливость. «Почитай отца твоего и мать» – это первая заповедь с обетованием.#Еф. 6:1, 2','Если же не угодно вам служить Господу, то изберите себе ныне, кому служить, богам ли, которым служили отцы ваши, бывшие за рекою, или богам Аморреев, в земле которых живёте; а я и дом мой будем служить Господу.#Ис. Нав. 24:15','Дети, будьте послушны родителям вашим во всем, ибо это благоугодно Господу.#Кол. 3:20','Хочу также, чтобы вы знали, что всякому мужу глава – Христос, жене глава – муж, а Христу глава – Бог.#1 Кор. 11:3','Почитай отца твоего и мать твою, чтобы продлились дни твои на земле, которую Господь, Бог твой, даёт тебе.#Исх. 20:12'];
       </script>
        <script type="text/javascript" src="/tests/exam/generate.js?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/tests/exam/generate.js')?>"></script>
  </section>
 <div class="buttons">
	    	<a href-data="/" class="a1"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#6f6f6f"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg></button></a>
		<a href-data="/archive/" class="a2"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#6f6f6f"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/></svg></button></a>
		<a href-data="/settings/" class="a3"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#6f6f6f"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg></button></a>
		<a href-data="/starlist/" class="a5"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#6f6f6f"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg></button></a>
		<div class="a4 active"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#02b478"><path d="M0 0h24v24H0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"/></svg></button></div>
	</div>
	<script type="text/javascript" src="/animate.js?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/animate.js')?>"></script>
</body>
</html>