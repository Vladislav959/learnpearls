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
	<link rel="stylesheet" type="text/css" href="/tests/training/teststyle.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/tests/training/teststyle.css')?>">
<link rel="stylesheet" type="text/css" href="/main.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/main.css')?>">
	<title>4 квартал, 2020 год - Тренировка</title>
		
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/warning.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/tests/training/test_darkstyles.php");
    ?>
    <section class="page">
        <style class="quarterstyles"></style>
<div class="header">
		<div class="back"><a href-data="/tests/training/"><img src="https://learnpearls.ru/back.png"></a></div>
		<p>4 квартал, 2020 год</p>
	</div>
<div class="end"><div class="ending"></div><a href-data="" class="end_a1"><button>Пройти ещё раз</button></a><a class="end_a2" href-data="/tests/"><button>Завершить</button></a></div>
        <script>
        var yearforline = 2020;
        var quarterforline = 4;
        var lines = ['Ибо я не стыжусь благовествования Христова, потому что оно есть сила Божия ко спасению всякому верующему, во-первых, Иудею, потом и Еллину. В нём открывается правда Божия от веры в веру, как написано: «праведный верою жив будет».#Рим. 1:16, 17','А без веры угодить Богу невозможно; ибо надобно, чтобы приходящий к Богу веровал, что Он есть, и ищущим Его воздает.#Евр. 11:6','Вера же есть осуществление ожидаемого и уверенность в невидимом.#Евр. 11:1','Потому что делами закона не оправдается пред Ним никакая плоть; ибо законом познаётся грех.#Рим. 3:20','Ибо Христос, когда ещё мы были немощны, в определенное время умер за нечестивых. Ибо едва ли кто умрёт за праведника; разве за благодетеля, может быть, кто и решится умереть.#Рим. 5:6, 7','Кто будет веровать и креститься, спасен будет; а кто не будет веровать, осужден будет.#Марк. 16:16','Посему, как преступлением одного – всем человекам осуждение, так правдою одного – всем человекам оправдание к жизни.#Рим. 5:18','Потому что вам дано ради Христа не только веровать в Него, но и страдать за Него.#Флп. 1:29','И уже не я живу, но живёт во мне Христос. А что ныне живу во плоти, то живу верою в Сына Божия, возлюбившего меня и предавшего Себя за меня.#Гал. 2:20','О Нем все пророки свидетельствуют, что всякий верующий в Него получит прощение грехов именем Его.#Деян. 10:43','Но вы – род избранный, царственное священство, народ святой, люди, взятые в удел, дабы возвещать совершенства Призвавшего вас из тьмы в чудный Свой свет.#1 Петр. 2:9','Посему, как вы приняли Христа Иисуса Господа, так и ходите в Нём, будучи укоренены и утверждены в Нём и укреплены в вере, как вы научены, преуспевая в ней с благодарением.#Кол. 2:6, 7'];
        </script>
        <script type="text/javascript" src="/tests/training/generate.js?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/tests/training/generate.js')?>"></script>
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