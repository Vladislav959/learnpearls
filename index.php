<!DOCTYPE html>
<html>
<head>
    <meta name="" content="" class="dark_theme">
<meta name="description" content='С LearnPearls вы легко подготовитесь к конкурсу "Памятные Жемчужины". Здесь есть стихи из Библии для всех годов. С удобным интерфейсом, специальными тестами и большим количеством функций вам будет легче учить Памятные Жемчужины.'>
<meta name="keywords" content="пж, памятные жемчужины, жемчужины, Библия, учить пж, учить памятные жемчужины, пж 2020 год, пж 2020, памятные жемчужины 2020, учить пж 2020 года, учить пж 2020, учить памятные жемчужины 2020 года, стихи из Библии, следопыты, следопыт, клуб следопыт, адвентист, адвентисты, выучить пж, выучить памятные жемчужины, выучить стихи из Библии, подготовиться к памятным жемчужинам">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="preload" as="font" type="font/ttf" crossorigin="anonymous" href="/euclid.ttf">
<meta name="author" content="LearnPearls">
<meta property="og:type" content="website">
<meta property="og:title" content="LearnPearls">
<meta property="og:site_name" content="learnpearls.ru">
<meta property="og:url" content="https://learnpearls.ru">
<meta property="og:description" content='С LearnPearls вы легко подготовитесь к конкурсу "Памятные Жемчужины". Здесь есть стихи из Библии для всех годов. С удобным интерфейсом, специальными тестами и большим количеством функций вам будет легче учить Памятные Жемчужины.'>
<meta property="og:image" content="https://learnpearls.ru/ogimage2.png">
<meta property="og:locale" content="ru">
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:card" content="summary_large_image">
<meta name="twitter:creator" content="@gubarev_dev">
<meta name="twitter:url" content="https://learnpearls.ru">
<meta name="twitter:title" content="LearnPearls">
<meta name="twitter:description" content='С LearnPearls вы легко подготовитесь к конкурсу "Памятные Жемчужины". Здесь есть стихи из Библии для всех годов. С удобным интерфейсом, специальными тестами и большим количеством функций вам будет легче учить Памятные Жемчужины.'>
<meta name="twitter:image" content="https://learnpearls.ru/ogimage2.png">
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
	<meta name="yandex-verification" content="97c856bec268d14f" />
</head><?php
if(isset($_COOKIE['isdark']) and $_COOKIE['isdark']=="yes"){
$theme = 'dark';
}
elseif($_COOKIE['isdark']=="no" or !isset($_COOKIE['isdark'])){
$theme = 'notdark';
}
?>
<body <?php echo 'class="' . $theme . '"';?>>
<?php 
 include($_SERVER['DOCUMENT_ROOT'] . "/warning.php");
$month = date("n");
 
$quarter = ceil($month / 3);
if($quarter == 1){
    $badge_bg = 'linear-gradient(120deg,#6ed980, #66cc77)';
}
else if($quarter == 2){
    $badge_bg = 'linear-gradient(120deg,#46a3f0, #2196f3)';
}
else if($quarter == 3){
    $badge_bg = 'linear-gradient(120deg,#09cfe1, #07b5c5)';
}
else if($quarter == 4){
    $badge_bg = 'linear-gradient(120deg,#8090ec, #5c6bc0)';
}
?>
<style>
    .swiper-slide{
        background:<?php echo $badge_bg;?>;
    }
</style>
    
    <section class="page">
	<div class="header">
		<p class="notmargin">Памятные Жемчужины</p>
	</div>
 <p class="welcome"></p>
	<script>
	 function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(';').shift();
}function insertAfter(newNode, referenceNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}
var dq = new Date();
   	var hour = new Date().getHours();
var day = new Date().getDay();
var welcomeplace = document.querySelector('.welcome');
var curname = getCookie('name');
if(!curname){
    curname = '';
}
else{
    curname = ', ' + curname;
}
if (hour >= 4 && hour < 12 && day != 6){
    welcomeplace.innerHTML = 'Доброе утро👋' + curname + '!';
}
else if (hour >= 12 && hour < 17 && day !=6){
    welcomeplace.innerHTML = 'Добрый день☀️' + curname + '!';
}

else if (hour >= 17 && hour < 22 && day != 6){
   welcomeplace.innerHTML = 'Добрый вечер👋' + curname + '!';
}
else if (hour >= 22 && hour <=24 && day != 6){
    welcomeplace.innerHTML = 'Доброй ночи🌙' + curname + '!';
}
else if (hour >= 0 && hour <4 && day != 6){
    welcomeplace.innerHTML = 'Доброй ночи🌙' + curname + '!';
}
else if (day == 6){
      welcomeplace.innerHTML = 'С Субботним Днём' + curname + '!';
}
</script>
<a href-data="/archive/<?php $yearnquarter = date("Y") . "/" . $quarter; echo substr($yearnquarter, 2);?>/"><div class="quarter_badge" style="background:<?php echo $badge_bg;?>"><p><?php echo $quarter;?> квартал</p></div></a>
<div class="maincart">
    <div class="swiper-wrapper">
    </div>
	</div>
	
  <script>
var d=new Date;
var month=d.getMonth()+1;
var day=d.getDate();
</script>
	<h2 class="stories_h">Новости</h2>
<div class="stories">
    <a href-data="/stories/update/"><div class="story" data-date="29.10" data-name="update2"><img class="story_img" src="phone1.png"><p>Обновле-ние!</p></div></a>
    <div class="story" style="display:none" data-name="update"><span>😃</span><p>Обновле-ние!</p></div>
</div>
<div class="wantdark_container"></div>
<p class="t1">Что хотите сделать?</p>
	<div class="actions2">
	    <a href-data="/archive/<?php $yearnquarter = date("Y") . "/" . $quarter; echo substr($yearnquarter, 2);?>/"><p>Открыть Памятные Жемчужины за этот квартал</p></a>
	    <hr>
<a href-data="/tests/training/"><p>Потренироваться</p></a>
<hr>
<a href-data="/tests/exam/"><p>Начать пробный экзамен</p></a>
<hr>
	    <a href-data="/settings/"><p><?php 
if(isset($_COOKIE['name']) and !empty($_COOKIE['name'])){
echo 'Изменить&nbsp;';}
else{
echo 'Добавить&nbsp;';}
?>имя</p></a>
	</div>
	<div class="copied_badge"><p>Скопировано!</p></div>
	<div class="dop_block-mini"></div></section>
	<div class="buttons">
	    	<div class="a1 active"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg></button></div>
		<a href-data="/archive/" class="a2"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/></svg></button></a>
		<a href-data="/settings/" class="a3"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg></button></a>
		<a href-data="/starlist/" class="a5"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg></button></a>
		<a href-data="/tests/" class="a4"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zM10 9h8v2h-8zm0 3h4v2h-4zm0-6h8v2h-8z"/></svg></button></a>
	</div>
	<script type="text/javascript" src="/animate.js?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/animate.js')?>"></script>
<script>
<?php
if(isset($_COOKIE['isbeta']) and $_COOKIE['isbeta'] =="yes"){
if(!isset($_COOKIE['isdark']) or $_COOKIE['isdark']!="yes"){
echo "
if(getCookie('wantdark') != 'closed'){if (hour >= 21 && hour <= 23){
   document.querySelector('.wantdark_container').innerHTML = '<div class=\"wantdark\"><p>Включить тёмную тему?</p><p><button class=\"wantdark_agree\">Да</button><button class=\"wantdark_disagree\">Нет</button></p><div class=\"wantdark_icon\"><img src=\"/brain.png\"></div></div>';
}
else if (hour >= 0 && hour <= 4){
   document.querySelector('.wantdark_container').innerHTML = '<div class=\"wantdark\"><p>Включить тёмную тему?</p><p><button class=\"wantdark_agree\">Да</button><button class=\"wantdark_disagree\">Нет</button></p><div class=\"wantdark_icon\"><img src=\"/brain.png\"></div></div>';
}
function wantdark(status){
var now = new Date();
var time = now.getTime();
var expireTime = time + 1000*25200;
now.setTime(expireTime);
if(status === true){
document.querySelector('body').classList.toggle('dark');
document.querySelector('body').classList.toggle('notdark');
document.querySelector('.stories').classList.add('wantdarkdisappearing');
document.querySelector('.dark_theme').setAttribute('name','theme-color');
document.querySelector('.dark_theme').setAttribute('content','#1c1d26');
document.cookie = \"isdark=yes; expires=\" + now.toGMTString() + \"; path=/\";
}
document.querySelector('.wantdark').classList.add('disappearing');
document.cookie = \"wantdark=closed; expires=\" + now.toGMTString() + \"; path=/\";
}
if (hour >= 21 && hour <= 23){
document.querySelector('.wantdark_agree').onclick = function() {
        wantdark(true);
   };
   document.querySelector('.wantdark_disagree').onclick = function() {
        wantdark(false);
   }}
   else if (hour >= 0 && hour <= 4){
document.querySelector('.wantdark_agree').onclick = function() {
        wantdark(true);
   };
   document.querySelector('.wantdark_disagree').onclick = function() {
        wantdark(false);
   }}}
";}}?>
var yearforline = '<?php echo date('Y');?>';
yearforline = yearforline.substring(2);
var quarterforline = '<?php echo $quarter;?>';
var lines = ['Ибо я не стыжусь благовествования Христова, потому что оно есть сила Божия ко спасению всякому верующему, во-первых, Иудею, потом и Еллину. В нём открывается правда Божия от веры в веру, как написано: «праведный верою жив будет».#Рим. 1:16, 17#1 неделя, 03.10.2020 - 09.10.2020','А без веры угодить Богу невозможно; ибо надобно, чтобы приходящий к Богу веровал, что Он есть, и ищущим Его воздает.#Евр. 11:6#2 неделя, 10.10.2020 - 16.10.2020','Вера же есть осуществление ожидаемого и уверенность в невидимом.#Евр. 11:1#3 неделя, 17.10.2020 - 23.10.2020','Потому что делами закона не оправдается пред Ним никакая плоть; ибо законом познаётся грех.#Рим. 3:20#4 неделя, 24.10.2020 - 30.10.2020','Ибо Христос, когда ещё мы были немощны, в определенное время умер за нечестивых. Ибо едва ли кто умрёт за праведника; разве за благодетеля, может быть, кто и решится умереть.#Рим. 5:6, 7#5 неделя, 31.10.2020 - 06.11.2020','Кто будет веровать и креститься, спасен будет; а кто не будет веровать, осужден будет.#Марк. 16:16#6 неделя, 07.11.2020 - 13.11.2020','Посему, как преступлением одного – всем человекам осуждение, так правдою одного – всем человекам оправдание к жизни.#Рим. 5:18#7 неделя, 14.11.2020 - 20.11.2020','Потому что вам дано ради Христа не только веровать в Него, но и страдать за Него.#Флп. 1:29#8 неделя, 21.11.2020 - 27.11.2020','И уже не я живу, но живёт во мне Христос. А что ныне живу во плоти, то живу верою в Сына Божия, возлюбившего меня и предавшего Себя за меня.#Гал. 2:20#9 неделя, 28.12.2020 - 04.12.2020','О Нем все пророки свидетельствуют, что всякий верующий в Него получит прощение грехов именем Его.#Деян. 10:43#10 неделя, 05.12.2020 - 11.12.2020','Но вы – род избранный, царственное священство, народ святой, люди, взятые в удел, дабы возвещать совершенства Призвавшего вас из тьмы в чудный Свой свет.#1 Петр. 2:9#11 неделя, 12.12.2020 - 18.12.2020','Посему, как вы приняли Христа Иисуса Господа, так и ходите в Нём, будучи укоренены и утверждены в Нём и укреплены в вере, как вы научены, преуспевая в ней с благодарением.#Кол. 2:6, 7#12 неделя, 19.12.2020 - 25.12.2020','Экзамен#Экзамен#13 неделя, 26.12.2020 - 01.01.2021'];
var data_id = 0;
var startweek = 41;
for (var c in lines) {
    var newElement = document.createElement('div');
    var line = lines[c].split('#')[0];
    var question_num = ',';
    testcookie = getCookie('starlist');
    line = line.replace(/;/g, question_num); 
    var link = lines[c].split('#')[1];
    var date = lines[c].split('#')[2];
    newElement.className = "swiper-slide";
    newElement.setAttribute('style','width:' + window.screen.width + 'px')
    newElement.setAttribute('data-id',data_id);
    newElement.setAttribute('week-number',startweek);
    if(quarterforline == 1){
bg_color = 'linear-gradient(120deg,#71e384, #66cc77)';
}
else if(quarterforline == 2){
bg_color = 'linear-gradient(120deg,#46a3f0, #2196f3)';
}
else if(quarterforline == 3){
bg_color = 'linear-gradient(120deg,#07c7d9, #01aebe)';
}
else if(quarterforline == 4){
bg_color = 'linear-gradient(120deg,#7d8de9, #5c6bc0)';
}
var currid = parseInt(data_id, 10);
    currid = currid + 1;
    var element_content = yearforline + '#' + quarterforline + '#' + currid;
    if(testcookie !== undefined){
    if(testcookie.includes(element_content)){
    actions_inner = '<div class="actions" data-id="' + data_id + '"><svg xmlns="http://www.w3.org/2000/svg" class="star_outlined" style="display:none" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg><svg class="star_filled" style="display:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg></div>';
    }
    else{
        actions_inner = '<div class="actions" data-id="' + data_id + '"><svg xmlns="http://www.w3.org/2000/svg" class="star_outlined" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg><svg class="star_filled" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg></div>';
    }
    }
    else{
        actions_inner = '<div class="actions" data-id="' + data_id + '"><svg xmlns="http://www.w3.org/2000/svg" class="star_outlined" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg><svg class="star_filled" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg></div>';
   
    }
    newElement.innerHTML = '<p class="datet">' + date + '</p>' + actions_inner + '<p class="maint">' + line + '</p><p class="quartert">' + link + '</p>';
    document.querySelector('.swiper-wrapper').appendChild(newElement);
    data_id++;
    startweek++;
                            }
                             function copy (idc) {
    var text = document.querySelectorAll('.maint')[idc].textContent + " (" + document.querySelectorAll('.quartert')[idc].textContent + ")";
    var x = document.createElement("INPUT");
    x.setAttribute("type", "text");
    x.setAttribute("class", "dop_input");
    x.setAttribute("value", text);
    document.body.appendChild(x);
    var elem = document.querySelector('.dop_input');
    elem.select();
    document.execCommand('copy');
    elem.parentNode.removeChild(elem);
   var copied_badge_elem = document.querySelector('.copied_badge');
 copied_badge_elem.classList.remove('badge_not_displayed');
copied_badge_elem.classList.add('badge_displayed');
    setTimeout(function(){copied_badge_elem.classList.remove('badge_displayed');
copied_badge_elem.classList.add('badge_not_displayed');
},2000);
};
function setupActions(){
var star_outlined_all = document.querySelectorAll('.star_outlined');
star_outlined_all.forEach(btn => {
   btn.onclick = function() {
       tostarlist(this.parentNode.getAttribute('data-id'));
   };

});
var star_filled_all = document.querySelectorAll('.star_filled');
star_filled_all.forEach(btn => {
   btn.onclick = function() {
       tostarlist(this.parentNode.getAttribute('data-id'));
   };

});
var copy_all = document.querySelectorAll('.copy');
copy_all.forEach(btn => {
   btn.onclick = function() {
        copy(this.parentNode.getAttribute('data-id'));
   };

});}
function tostarlist(idq){
    var currid = parseInt(idq, 10);
    currid = currid + 1;
    var currentline = '$' + yearforline + '#' + quarterforline + '#' + currid;
    var currentlinedel = yearforline + '#' + quarterforline + '#' + currid;
var cookietest = getCookie('starlist');
var now = new Date();
  var time = now.getTime();
  var expireTime = time + 1000*25920000;
  now.setTime(expireTime);
if(cookietest === undefined){
  
    document.querySelectorAll('.actions')[idq].innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="star_outlined" style="display:none" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg><svg class="star_filled" style="display:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg>';
    document.cookie = "starlist=" + currentlinedel + "; expires=" + now.toGMTString() + "; path=/";
   
}
else {
    if(cookietest.includes(currentlinedel)){
        
        
        if(getCookie('starlist').split('$')[0] == currentlinedel){
            if(getCookie('starlist').split('$')[1] === undefined){
               cookietest = cookietest.replace (currentlinedel, ''); 
            }
            else{
        cookietest = cookietest.replace (currentlinedel + '$', '');
        }}
        else{
             cookietest = cookietest.replace (currentline, '');
        }
        
       
        document.cookie = "starlist=" + cookietest + "; expires=" + now.toGMTString() + "; path=/";
        if(cookietest == 'NaN' || cookietest === ''){
            document.cookie = "starlist=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
        }
       
        document.querySelectorAll('.actions')[idq].innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="star_outlined" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg><svg class="star_filled" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg>';
    }
    else{
        cookietest += currentline;
       
        document.cookie = "starlist=" + cookietest + "; expires=" + now.toGMTString() + "; path=/";
    
        document.querySelectorAll('.actions')[idq].innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="star_outlined" style="display:none" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg><svg class="star_filled" style="display:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg>';
    }
}
  setupActions();
}
setupActions();
function seenstory(data_name){
var now2 = new Date();
var data_name_dop = data_name;
  var time2 = now2.getTime();
  var expireTime2 = time2 + 1000*25920000;
  now2.setTime(expireTime2);var storiesnow = getCookie('stories');
  if(storiesnow === undefined){
        data_name = '#' + data_name + '#';
    document.cookie = "stories=" + data_name + "; expires=" + now2.toGMTString() + "; path=/";
      }else{
  data_name = '#' + data_name + '#';
    document.cookie = "stories=" + data_name + storiesnow + "; expires=" + now2.toGMTString() + "; path=/";}
    document.querySelector('[data-name="' + data_name_dop + '"]').classList.add('no-after');
    }  
var stories2 = document.querySelectorAll('.story');
if(getCookie('stories') === undefined){
    stories2.forEach(story2 => {
 story2.classList.add('story--new');

});
}
else{
    stories2.forEach(story2 => {
 var story_data_loading = story2.getAttribute('data-name');
 story_data_loading = '#' + story_data_loading + '#';
 if(!getCookie('stories').includes(story_data_loading)){
     story2.classList.add('story--new');
 }
else{
    var newdatechild = document.createElement('p');
    newdatechild.className = 'story_date';
    newdatechild.innerHTML = story2.getAttribute('data-date');
    story2.appendChild(newdatechild);
}
});}var stories = document.querySelectorAll('.story');
    stories.forEach(story => {
        if(story.classList.contains('story--new')){
   story.onclick = function() {
       seenstory(this.getAttribute('data-name'));
   };}

});
function getWeekNumber(d) {
    // Copy date so don't modify original
    d = new Date(Date.UTC(d.getFullYear(), d.getMonth(), d.getDate()));
    // Set to nearest Thursday: current date + 4 - current day number
    // Make Sunday's day number 7
    d.setUTCDate(d.getUTCDate() + 4 - (d.getUTCDay()||1));
    // Get first day of year
    var yearStart = new Date(Date.UTC(d.getUTCFullYear(),0,1));
    // Calculate full weeks to nearest Thursday
    var weekNo = Math.ceil(( ( (d - yearStart) / 86400000) + 1)/7);
    // Return array of year and week number
    return [d.getUTCFullYear(), weekNo];
}

var weekofyear = getWeekNumber(new Date());
var weekofyear = weekofyear[1];
var inSlide = document.querySelector('[week-number="' + weekofyear + '"]').getAttribute('data-id');
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var mySwiper = new Swiper('.maincart', {
    autoHeight:true,
    initialSlide:inSlide,
});
</script>
</body>
</html>