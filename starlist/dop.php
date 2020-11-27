<!DOCTYPE html>
<html>
<head>
<link rel="canonical" href="https://learnpearls.ru/">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<meta name="description" content='На данном сайте вы можете выучить стихи из Библии для участия в конкурсе "Памятные жемчужины".'>
<meta name="keywords" content="пж, памятные жемчужины, жемчужины, Библия, учить пж, учить памятные жемчужины, пж 2020 год, пж 2020, памятные жемчужины 2020, учить пж 2020 года, учить пж 2020, учить памятные жемчужины 2020 года, стихи из Библии, следопыты, следопыт, клуб следопыт, адвентист, адвентисты, выучить пж, выучить памятные жемчужины, выучить стихи из Библии, подготовиться к памятным жемчужинам">

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
		<link rel="stylesheet" type="text/css" href="/starlist/style.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/starlist/style.css')?>">
<link rel="stylesheet" type="text/css" href="/main.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/main.css')?>">
	<title>Сохраненные стихи | Памятные Жемчужины</title>
</head>
<body>
<?php 
 include($_SERVER['DOCUMENT_ROOT'] . '/warning.php');
if(isset($_COOKIE['isdark']) and $_COOKIE['isdark']=="yes"){
echo '<style>
body{background-color:#1c1d26;}
.buttons a:not(.active) svg{fill:#b0b0b0;}
.buttons{background:black;box-shadow: -10px -10px 15px rgb(52 51 51 / 50%), 10px 10px 10px rgb(100 100 100 / 12%);}
.header{background-color: #1c1d26;}
h2,p{color:#b0b0b0;}
.cart{box-shadow: -10px -10px 15px rgb(70 70 70 / 50%), 10px 10px 15px rgb(242 242 242 / 12%);}
</style>';
}
elseif($_COOKIE['isdark']=="no" or !isset($_COOKIE['isdark'])){
echo '<style>
.header{background-color: #02b478;}
.buttons a:not(.active) svg{fill:#6f6f6f;}
.buttons{background-color:white;box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
h2,p{color:#6f6f6f;}
.cart{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12)}
</style>';};
?>
<section class="page">
	<div class="header">
		<p class="notmargin">Избранное</p>
	</div>
<h2 class="main_h">Сохраненные стихи</h2>
<div class="starlist_result"></div>
<div class="copied_badge"><p>Скопировано!</p></div>
	<div class="dop_block"></div>
	</section>
	<div class="buttons">
	    	<a href-data="/" class="a1"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg></button></a>
		<a href-data="/archive/" class="a2"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/></svg></button></a>
		<a href-data="/settings/" class="a3"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg></button></a>
		<div class="a5 active"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg></button></div>
		<a href-data="/tests/" class="a4"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zM10 9h8v2h-8zm0 3h4v2h-4zm0-6h8v2h-8z"/></svg></button></a>
	</div>
	
	<script>
	    function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(';').shift();
}
var result = getCookie('starlist');
if(result === undefined){
    document.querySelector('.starlist_result').innerHTML = '<div class="ifempty">🤔</div><p class="ifempty2">Тут пока пусто. Добавь что-нибудь.</p>';
}
else{
	var request = new XMLHttpRequest();
   request.open("GET", "/archive/lines.json", false);
   request.send(null);
   var all = JSON.parse(request.responseText);
   result = result.split('$');
   data_id = 0;
   for(var r in result){
       dataline = result[r];
       dataline = dataline.split('#');
       var year = dataline[0];
       var quarter = dataline[1];
       var linenumber = dataline[2];
       var line = all[0][year][quarter][0][linenumber]['line'];
       var link = all[0][year][quarter][0][linenumber]['link'];
       var date = all[0][year][quarter][0][linenumber]['date'];
       console.log(all[0][year][quarter][0][linenumber]['line']);
       var cart = document.createElement('div');
       cart.className = 'cart';
       var cart_bg;
       if(quarter == 1){
    cart_bg = 'linear-gradient(120deg,#6ed980, #66cc77)';
}
else if(quarter == 2){
    cart_bg = 'linear-gradient(120deg,#46a3f0, #2196f3)';
}
else if(quarter == 3){
    cart_bg = 'linear-gradient(120deg,#09cfe1, #07b5c5)';
}
else if(quarter == 4){
    cart_bg = 'linear-gradient(120deg,#8090ec, #5c6bc0)';
}
cart.setAttribute('style','background:' + cart_bg);
cart.setAttribute('data-id', r);
cart.setAttribute('data-book', result[r]);
cart.innerHTML = '<p class="datet">' + date + '</p><div class="actions"><svg class="star_filled" style="display:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg></div><p class="maint">' + line + '</p><p class="quartert">' + link + '</p>';
   document.querySelector('.starlist_result').appendChild(cart);
   }}
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
 document.querySelector('.copied_badge').classList.add('dblock');
    setTimeout(function(){document.querySelector('.copied_badge').classList.remove('dblock');},2500);
};
        
        function deletebook(book,idc){
            var now = new Date();
  var time = now.getTime();
  var expireTime = time + 1000*36000;
  now.setTime(expireTime);
  var cookietest = getCookie('starlist');
        
        if(getCookie('starlist').split('$')[0] == book){
        if(getCookie('starlist').split('$')[1] === undefined){
               cookietest = cookietest.replace (book, ''); 
            }
            else{
        cookietest = cookietest.replace (book + '$', '');
        }
        }
        else{
             cookietest = cookietest.replace ('$' + book, '');
        }
        
      
        document.cookie = "starlist=" + cookietest + "; expires=" + now.toGMTString() + "; path=/";
        if(cookietest == 'NaN' || cookietest === ''){
            document.cookie = "starlist=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
        }
        
        document.querySelectorAll('.cart')[idc].classList.add('disappearing');
        if(getCookie('starlist') === undefined){
       setTimeout(function(){document.querySelector('.starlist_result').innerHTML = '<div class="ifempty">🤔</div><p class="ifempty2">Тут пока пусто. Добавь что-нибудь.</p>';},550);
        }
        }
var copy_all = document.querySelectorAll('.copy');
copy_all.forEach(btn => {
   btn.onclick = function() {
        copy(this.parentNode.parentNode.getAttribute('data-id'));
   };

});
var delete_all = document.querySelectorAll('.star_filled');
delete_all.forEach(btn => {
   btn.onclick = function() {
        deletebook(this.parentNode.parentNode.getAttribute('data-book'),this.parentNode.parentNode.getAttribute('data-id'));
   };

});
</script>

<script type="text/javascript" src="/animate.js?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/animate.js')?>"></script>
</body>
</html>