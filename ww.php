<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
	
<style>
    .warning{
top:0;
left:0;
        width:100vw;
        height:100vh;
        z-index:99999;
        position:fixed;
        border:none;
    Background-color:white!important;
    }
    .warning h3{
        font-size:1.8em;
        text-align:center;
font-weight:400;
        padding-top:70px;
Color:#6f6f6f;
-webkit-user-select:none;
-moz-user-select: none;
-khtml-user-select: none;
user-select: none;  
    }
    span{
-webkit-user-select:none;
-moz-user-select: none;
-khtml-user-select: none;
user-select: none;  }
    .warning p{
Color:#6f6f6f;
Text-align:center;
font-weight:300;
        font-size:1.6em;
        Padding-top:100px;
-webkit-user-select:none;
-moz-user-select: none;
-khtml-user-select: none;
user-select: none;  
    }
    .warning .logo{
Width:60vw;
left:20vw;
Position:absolute;
bottom:145px;
}
.myname{
position:absolute;
bottom:70px;
font-size:1.2em!important;
color:#6f6f6f;
width:70vw;
font-weight:200;
left:15vw;
}
.myname a{
color:#6f6f6f;
}
  #timer{margin-top:5px;}
#timer953e764dd4318b5274cd601123f20ed6 *{
font-family:'Euclid'!important;
}
    .opento{padding-top:90px!important}
</style>

<div class="warning">
    <h3 class="animated fadeIn">Ждите обновления.</h3>
        <h3 class="opento animated fadeIn" style="margin-top:8vh;">Осталось:</h3>
<div id="timer animated fadeIn"><script src="//megatimer.ru/get/953e764dd4318b5274cd601123f20ed6.js"></script></div>

<img class="logo animated fadeIn wow" src="https://learnpearls.ru/logo.png">
        <p class="myname"><a href="https://gubarev.site">Сайт сделан Владиславом Губаревым</a></p>
</div>
<script>
    window.onload = function () {
      document.body.classList.add('loaded_hiding');
      window.setTimeout(function () {
        document.body.classList.add('loaded');
        document.body.classList.remove('loaded_hiding');
      }, 500);
    }
  </script>