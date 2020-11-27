<?php include($_SERVER['DOCUMENT_ROOT'] . "/warning.php");
    if(isset($_COOKIE['isdark']) and $_COOKIE['isdark']=="yes"){
echo '<style>
body{background-color:#1c1d26;}
.buttons{background-color:black;box-shadow: -10px -10px 15px rgb(52 51 51 / 50%), 10px 10px 10px rgb(100 100 100 / 12%)}
.header{background-color: #1c1d26;}
h1,h2,h3,h4,h5,p{color:#b0b0b0;}
.buttons a:not(.active) svg{fill:#b0b0b0;}
.quiz_btn_check{box-shadow:-5px -5px 15px rgb(84 84 84 / 50%), 10px 10px 15px rgb(132 132 132 / 12%);}
.quiz_btn_go{box-shadow:-5px -5px 15px rgb(84 84 84 / 50%), 10px 10px 15px rgb(132 132 132 / 12%);}
.quiz_end_tryagain{box-shadow:-5px -5px 15px rgb(84 84 84 / 50%), 10px 10px 15px rgb(132 132 132 / 12%);}
.quiz_end_quit{box-shadow:-5px -5px 15px rgb(84 84 84 / 50%), 10px 10px 15px rgb(132 132 132 / 12%);}
.text{box-shadow:-10px -10px 15px rgb(70 70 70 / 17%), 10px 10px 15px rgb(242 242 242 / 0.07);color:#b0b0b0;}
::-webkit-input-placeholder {color:#b0b0b0;}
:-moz-placeholder {color:#b0b0b0;opacity:  1;}
::-moz-placeholder {color:#b0b0b0;opacity:  1;}
:-ms-input-placeholder {color:#b0b0b0;}
::-ms-input-placeholder {color:#b0b0b0;}
::placeholder {color:#b0b0b0;}
body:before{background:#1c1d26;color:white;}
body{background:#1c1d26;}
</style>';
}
elseif($_COOKIE['isdark']=="no" or !isset($_COOKIE['isdark'])){
echo '<style>.header{background-color: #02b478;}
body{background:white;}
.buttons a:not(.active) svg{fill:#6f6f6f;}
.buttons{background-color:white;box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
h1,h2,h3,h4,h5,p{color:#6f6f6f;}
.quiz_btn_check{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
.quiz_btn_go{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
.line{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
.quiz_end_tryagain{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
.quiz_end_quit{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
.text{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgb(106 105 105 / 12%);color:#6f6f6f;}
::-webkit-input-placeholder {color:#6f6f6f;}
:-moz-placeholder {color:#6f6f6f;opacity:  1;}
::-moz-placeholder {color:#6f6f6f;opacity:  1;}
:-ms-input-placeholder {color:#6f6f6f;}
::-ms-input-placeholder {color:#6f6f6f;}
::placeholder {color:#6f6f6f;}
body:before{background:white;color:black;}
</style>';}
    ?>