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
 <link rel="stylesheet" type="text/css" href="/tests/exam/style.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/tests/exam/style.css')?>">
<link rel="stylesheet" type="text/css" href="/main.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/main.css')?>">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Экзамен - Тесты | Памятные Жемчужины</title>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/warning.php");
$month = date("n");
 
$quarter = ceil($month / 3);
    if(isset($_COOKIE['isdark']) and $_COOKIE['isdark']=="yes"){
echo '<style>
body{background-color:#1c1d26;}
.buttons a:not(.active) svg{fill:#b0b0b0;}
.buttons{background-color:black;box-shadow: -10px -10px 15px rgb(52 51 51 / 50%), 10px 10px 10px rgb(100 100 100 / 12%)}
.header{background-color: #1c1d26;}
h1,h2,h3,h4,h5,p{color:#b0b0b0;}
form select{color:white;}
.btn_sub{box-shadow:-5px -5px 15px rgb(84 84 84 / 50%), 10px 10px 15px rgb(132 132 132 / 12%);}
body:before{background:#1c1d26;color:white;}
body{background:#1c1d26;}
</style>';
}
elseif($_COOKIE['isdark']=="no" or !isset($_COOKIE['isdark'])){
echo '<style>.header{background-color: #02b478;}
.buttons a:not(.active) svg{fill:#6f6f6f;}
.buttons{background-color:white;box-shadow: -10px -10px 15px rgb(242 242 242/ 50%), 10px 10px 15px rgb(70 70 70 / 12%);}
h1,h2,h3,h4,h5,p{color:#6f6f6f}
form select{color:#6f6f6f}
.btn-sub{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
body:before{background:white;color:black;}
</style>';}
    ?>
    <section class="page">
	<div class="header">
		<div class="back"><a href-data="/tests/"><img src="https://learnpearls.ru/back.png"></a></div>
		<p>Тесты</p>
	</div>
	
<h3 class="test_h">Экзамен</h3>
<div class="test_pblock"><p class="test_p">Пробный экзамен по Памятным Жемчужинам улучшает запоминание стихов и  готовит к реальному тесту. Выберите год и квартал. После нажатия кнопки "Запустить" начнётся пробный экзамен. Вам будет показана ссылка на одну Памятную Жемчужину. Вспомните её. После введите нужную ПЖ в поле ввода и нажмите "Проверить". Вы увидите надпись "Стих написан неверно, перепроверь текст", если ответите неправильно. В таком случае перепроверьте себя и ответьте правильно, затем нажмите "Проверить". Если вы не можете написать ПЖ правильно, нажмите пропустить. Таких вопросов будет 12. После завершения экзамена вам будет показано число пропущенных стихов.</p><p class="test_p" style="font-weight:400">Внимание: регистр букв и знаки препинания кроме точек, восклицательных знаков и знаков вопроса не учитываются.</p></div>

    <p class="selp">Выберите год:</p>
    <select name="year" class="yearsel" onchange="changeyear(this)">
        <option value="20">2020</option>
    </select>
    <p class="selp">Выберите квартал:</p>
     <select class="quartersel" name="quarter" onchange="changequarter(this)">
        <option value="1"<?php if($quarter=="1"){echo 'selected';}?>>1</option>
        <option value="2"<?php if($quarter=="2"){echo 'selected';}?>>2</option>
        <option value="3"<?php if($quarter=="3"){echo 'selected';}?>>3</option>
        <option value="4"<?php if($quarter=="4"){echo 'selected';}?>>4</option>
    </select>
    <div class="btn_sub-div"><a href-data="/tests/exam/"><button class="btn_sub" type="submit">Запустить</button></a></div>
<div class="dop_block"></div></section>
<script>
    function changeyear(data){
        var selval = data.value;
        var linkval = document.querySelector('.btn_sub-div a').getAttribute('href-data');
        linkval = linkval.substring(linkval.length - 1);
        document.querySelector('.btn_sub-div a').setAttribute('href-data','/tests/exam/'+selval + '/' + linkval);
    }
    function changequarter(data){
        var selval = data.value;
        var linkval = document.querySelector('.btn_sub-div a').getAttribute('href-data');
        linkval = linkval.substring(0, linkval.length - 2);
        linkval = linkval.substring(12);
        document.querySelector('.btn_sub-div a').setAttribute('href-data','/tests/exam/'+linkval + '/' + selval);
    }
    
    var vall1 = document.querySelector('.quartersel').value;
    var vall2 = document.querySelector('.yearsel').value;
        var linkval = document.querySelector('.btn_sub-div a').setAttribute('href-data','/tests/exam/' + vall2 + '/' + vall1);
</script>
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