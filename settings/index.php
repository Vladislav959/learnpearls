<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="/settings/style.css">
<link rel="stylesheet" type="text/css" href="/main.css">
	<meta charset="utf-8">

 <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<link rel="icon" href="/logo.png?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/logo.png')?>">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	
	<title>Настройки | Памятные Жемчужины</title>
		
</head>
<body>
<section class="page">
	<div class="header">
		<p class="notmargin">Настройки</p>
	</div>
            <input placeholder="Введите имя..." type="text" class="change_input leftc" name="text">
        <button class="change_btn static_btn rightc">Изменить</button>
<p class="pwh headh leftc">Ваш пол:</p>
    <select class="rightc static_btn genderchange" onchange="changegender(this)">
  <option value="e">Не выбран</option>
  <option value="m">Мужской</option>
<option value="w">Женский</option>
</select>


<p class="dark_text headh leftc">Темная тема:</p>
<button class="dark_button static_btn rightc" onclick="toggleTheme()">hhsh</button></form>
<p class="beta_text headh leftc">Тестовые функции:</p>
<button class="beta_button static_btn rightc">hj</button>
<div class="vk leftc"><a href-data="https://vk.com/learnpearls"><p><svg viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="logo_vk_28">
            <rect x="0" y="0" width="28" height="28"></rect>
            <path d="M17.3733333,3 C23.5333333,3 25,4.46666667 25,10.6266667 L25,17.3733333 L25,17.3733333 C25,23.5333333 23.5333333,25 17.3733333,25 L10.6266667,25 L10.6266667,25 C4.46666667,25 3,23.5333333 3,17.3733333 L3,10.6266667 L3,10.6266667 C3,4.46666667 4.46666667,3 10.6266667,3 L17.3733333,3 L17.3733333,3 Z M8.72919464,9.875 L7.12502797,9.875 C6.66669464,9.875 6.57502238,10.0907608 6.57502238,10.3286806 C6.57502238,10.7535697 7.1188714,12.8609564 9.10726989,15.6481261 C10.4328594,17.5515411 12.3005281,18.5833333 14.000028,18.5833333 C15.0197166,18.5833333 15.1458613,18.3541667 15.1458613,17.9594279 L15.1458613,16.5208333 C15.1458613,16.0625 15.2424606,15.9710294 15.5653639,15.9710294 C15.8032837,15.9710294 16.2111704,16.0899893 17.1629062,17.0077204 C18.250576,18.0953901 18.4298928,18.5833333 19.0416946,18.5833333 L20.6458613,18.5833333 C21.1041946,18.5833333 21.3333613,18.3541667 21.2011586,17.9019191 C21.0564892,17.4511825 20.5371856,16.7972238 19.8481184,16.0220081 C19.474208,15.580145 18.9133849,15.1043054 18.743418,14.866329 C18.5054982,14.5604563 18.5734793,14.4244658 18.743418,14.1525696 L18.7719828,14.1120949 C19.013694,13.7685342 20.7124357,11.3326117 20.9018117,10.4646712 C21.003741,10.1247655 20.9018118,9.875 20.4166946,9.875 L18.812528,9.875 C18.4046412,9.875 18.2165996,10.0907608 18.1146137,10.3286806 C18.1146137,10.3286806 17.2988402,12.3171074 16.1431893,13.6087205 C15.7693073,13.9826026 15.5993403,14.1015625 15.3953969,14.1015625 C15.2934394,14.1015625 15.1458333,13.9826026 15.1458333,13.6427252 L15.1458333,10.4646712 C15.1458333,10.0567844 15.0274619,9.875 14.687528,9.875 L12.1666946,9.875 C11.9118008,9.875 11.7585056,10.0643096 11.7585056,10.2437254 C11.7585056,10.6303946 12.3363027,10.719565 12.3958613,11.8072631 L12.3958613,14.1695719 C12.3958613,14.6875 12.3023263,14.7814021 12.0983829,14.7814021 C11.5545622,14.7814021 10.2317168,12.7840922 9.44714724,10.4986476 C9.2933905,10.0544363 9.13917488,9.875 8.72919464,9.875 Z" id="↳-Icon-Color" fill="currentColor" fill-rule="nonzero"></path>
        </g>
    </g>
</svg>Наше сообщество ВК 
</p></a></div><div class="betawindow"><div class="bwc_div"><svg class="betawindow_cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></div>

    <p class="betawindow_1">Вы включили тестовые функции</p>
    <p class="betawindow_2">Новые, но еще нестабильные функции обозначаются знаком<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M20 8h-2.81c-.45-.78-1.07-1.45-1.82-1.96L17 4.41 15.59 3l-2.17 2.17C12.96 5.06 12.49 5 12 5c-.49 0-.96.06-1.41.17L8.41 3 7 4.41l1.62 1.63C7.88 6.55 7.26 7.22 6.81 8H4v2h2.09c-.05.33-.09.66-.09 1v1H4v2h2v1c0 .34.04.67.09 1H4v2h2.81c1.04 1.79 2.97 3 5.19 3s4.15-1.21 5.19-3H20v-2h-2.09c.05-.33.09-.66.09-1v-1h2v-2h-2v-1c0-.34-.04-.67-.09-1H20V8zm-6 8h-4v-2h4v2zm0-4h-4v-2h4v2z"></path></svg></span>.</p>
    <p class="betawindow_2">Сейчас тестовые функции есть на главной странице и странице тестов.</p>
    
</div>
<script>

 function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(';').shift();
}
var curname = getCookie('name');
if(curname === undefined){
    curname = '';
}
document.querySelector('.change_input').value = curname;
document.querySelector('.change_btn').onclick = function() {
       var change_value = document.querySelector('.change_input').value;
       if(curname == change_value && curname != '' && change_value != ''){document.querySelector('.anti_badge').classList.remove('badge_not_displayed');
document.querySelector('.anti_badge').classList.add('badge_displayed');
    setTimeout(function(){document.querySelector('.anti_badge').classList.remove('badge_displayed');
document.querySelector('.anti_badge').classList.add('badge_not_displayed');
},2000);
       }
else if(curname == change_value && change_value == '' && curname == ''){
           document.querySelector('.anti_badge2').classList.remove('badge_not_displayed');
document.querySelector('.anti_badge2').classList.add('badge_displayed');
    setTimeout(function(){document.querySelector('.anti_badge2').classList.remove('badge_displayed');
document.querySelector('.anti_badge2').classList.add('badge_not_displayed');
},2000);
       }
       else{
       change_value = change_value.trim();
       var nowq = new Date();
  var timeq = nowq.getTime();
  var expireTimeq = timeq + 1000*25920000;
  nowq.setTime(expireTimeq);
    document.cookie = "name=" + change_value + "; expires=" + nowq.toGMTString() + "; path=/";
    document.querySelector('.copied_badge').classList.remove('badge_not_displayed');
document.querySelector('.copied_badge').classList.add('badge_displayed');
    setTimeout(function(){document.querySelector('.copied_badge').classList.remove('badge_displayed');
document.querySelector('.copied_badge').classList.add('badge_not_displayed');
},2000);
           curname = getCookie('name');
       }
   };
var curgender = getCookie('gender');
    if(curgender === undefined){
        document.querySelector('.genderchange').firstElementChild.setAttribute('selected','');
    }
    else if(curgender == 'm'){
        document.querySelector('.genderchange').querySelectorAll('option')[1].setAttribute('selected','');
    }
    else if(curgender == 'w'){
        document.querySelector('.genderchange').querySelectorAll('option')[2].setAttribute('selected','');
    }
function changegender(data){
    var selectvalue = document.querySelector('.genderchange').value;
    var now = new Date();
  var time = now.getTime();
  var expireTime = time + 1000*25920000;
  now.setTime(expireTime);
    document.cookie = "gender=" + selectvalue + "; expires=" + now.toGMTString() + "; path=/";
}

function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
}
document.querySelector('.bwc_div').onclick = function(){
document.querySelector('.betawindow').classList.remove('windowopened');
document.querySelector('.betawindow').classList.add('windowclosed');
}
const bodyElSettings = document.querySelector('body');

// When the user changes the theme, we need to save the new value on local storage
const toggleTheme = function(){
	let curtheme = localStorage.getItem('theme');
	alert(curtheme);
	if(curtheme == 'light'){
	 bodyElSettings.dataset.theme = 'dark';
    localStorage.setItem('theme', 'dark');
	}
	else if(curtheme == 'dark'){
	 bodyElSettings.dataset.theme = 'light';
    localStorage.setItem('theme', 'light');
	}
	else{
		alert('bh');
	 bodyElSettings.dataset.theme = 'dark';
    localStorage.setItem('theme', 'dark');
	}
}
       
$(document).ready(function() {
    $('#beta_form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'beta.php',
            data: $(this).serialize(),
            success: function(){if(document.querySelector('#beta_hidden').getAttribute('value') == 'yes'){document.querySelector('#beta_hidden').setAttribute('value', 'no');
document.querySelector('.beta_button').innerHTML = 'Выключить';document.querySelector('.betawindow').classList.add('windowopened');
document.querySelector('.betawindow').classList.remove('windowclosed');
}else if(document.querySelector('#beta_hidden').getAttribute('value') == 'no'){document.querySelector('#beta_hidden').setAttribute('value', 'yes');
document.querySelector('.beta_button').innerHTML = 'Включить';
var betawindow2 = document.querySelector('.betawindow');
if(betawindow2.classList.contains('windowopened')){
betawindow2.classList.add('windowclosed');}
betawindow2.classList.remove('windowopened');
}}
       });
     });
});
</script><div class="dop_block-mini"></div><div class="copied_badge"><p>Имя изменено!</p></div>
<div class="anti_badge"><p>Измените имя!</p></div>
<div class="anti_badge anti_badge2"><p>Введите имя!</p></div>
<div class="madeby_div1">
<div class="madeby_div2">
<a disablefadeout="true" href-data="https://gubarev.site/ru/">Сайт сделан Владиславом Губаревым</a></div></div>
</section>
		<div class="buttons">
	    <a href-data="/" class="a1"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg></button></a>
		<a href-data="/archive/" class="a2"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/></svg></button></a>
		<div class="a3 active"><button><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><g><path d="M0,0h24v24H0V0z" fill="none"/><path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"/></g></svg></button></div>
	    <a href-data="/starlist/" class="a5"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg></button></a>
		<a href-data="/tests/" class="a4"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zM10 9h8v2h-8zm0 3h4v2h-4zm0-6h8v2h-8z"/></svg></button></a>
	</div>
	<script type="text/javascript" src="/animate.js?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/animate.js')?>"></script>
</body>
</html>
