<?php if(isset($_COOKIE['isdark']) and $_COOKIE['isdark']=="yes"){
echo '<style>
body{background-color:#1c1d26;}
.buttons{background-color:black;box-shadow: -10px -10px 15px rgb(52 51 51 / 50%), 10px 10px 10px rgb(100 100 100 / 12%)}
.header{background-color: #1c1d26;}
.buttons a:not(.active) svg{fill:#b0b0b0;}
.cart{box-shadow:-10px -10px 15px rgb(70 70 70 / 17%), 10px 10px 15px rgb(242 242 242 / 0.07);}
body:before{background:#1c1d26;color:white;}
body{background:#1c1d26;}
</style>';
}
elseif($_COOKIE['isdark']=="no" or !isset($_COOKIE['isdark'])){
echo '<style>
body{background:white}
.header{background-color: #02b478;}
.buttons a:not(.active) svg{fill:#6f6f6f;}
.buttons{background:white;box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12)}
.cart{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
.currentweek{box-shadow: 10px 10px 15px rgba(70,70,70,0.12);}
body:before{background:white;color:black;}
</style>';}?>