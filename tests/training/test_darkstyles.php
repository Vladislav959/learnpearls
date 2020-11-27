<?php include($_SERVER['DOCUMENT_ROOT'] . "/warning.php");
    if(isset($_COOKIE['isdark']) and $_COOKIE['isdark']=="yes"){
echo '<style>
body{background-color:#1c1d26;}
.buttons{background-color:black;box-shadow: -10px -10px 15px rgb(52 51 51 / 50%), 10px 10px 10px rgb(100 100 100 / 12%)}
.header{background-color: #1c1d26;}
.end_t{color:#b0b0b0;}
.buttons a:not(.active) svg{fill:#b0b0b0;}
.b1{box-shadow:-10px -10px 15px rgb(70 70 70 / 17%), 10px 10px 15px rgb(242 242 242 / 0.07);}
.line{box-shadow:-10px -10px 15px rgb(70 70 70 / 17%), 10px 10px 15px rgb(242 242 242 / 0.07);}
.end_a1 button{box-shadow: -10px -10px 15px rgb(70 70 70 / 50%), 10px 10px 15px rgb(189 189 189 / 12%);}
.end_a2 button{box-shadow: -10px -10px 15px rgb(70 70 70 / 50%), 10px 10px 15px rgb(189 189 189 / 12%);}
.end_results{color:#b0b0b0;}
body:before{background:#1c1d26;color:white;}
body{background:#1c1d26;}
</style>';
}
elseif($_COOKIE['isdark']=="no" or !isset($_COOKIE['isdark'])){
echo '<style>.header{background-color: #02b478;}
body{background:white;}
.buttons{background-color:white;box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
.end_t{color:#6f6f6f;}
.buttons a:not(.active) svg{fill:#6f6f6f;}
.b1{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
.line{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
.end_a1 button{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
.end_a2 button{box-shadow: -10px -10px 15px rgba(242, 242, 242,0.5), 10px 10px 15px rgba(70,70,70,0.12);}
.end_results{color:#6f6f6f;}
body:before{background:white;color:black;}
</style>';}
    ?>