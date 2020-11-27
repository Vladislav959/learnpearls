<?php
if(isset($_COOKIE['id'])){
    exit('<script>location.href="/profile"</script>');
}
?>
<!doctype html>
<html lang="en">
<head>
<script>
if (navigator.language = 'ru-RU'){
window.location.href="/ru/sign/"
}
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<meta name="author" content="Plorr.co">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="icon" type="image/png" href="/icon.png" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1">
<title>Sign in to Plorr</title>
<meta name="theme-color" content="#8377d1">
</head>
<body>
<style>
body{width:100%;min-height:100%}html,body{font-weight:400;line-height:20px}
@font-face{
font-family:'Brandon';
src:url('/sequel.ttf')
}
@font-face{
font-family:'Brandon2';
src:url('/brandon.ttf')
}
.logo{
height:45px;
vertical-align:baseline;
}
body{
font-family:'Brandon2';
color:black;
margin:0;
}
body p:not(.mtitle){
font-size:1.5em;
margin:13px 0;
line-height:1.05;
}
h1,h2,h3,h4{
color:black;
font-family:'Brandon';
}
body a{
font-family:'Brandon2';
}
body{
width:auto;
background:#f8f9fd;
}
.navbar{
background:#8377d1!important;
border-top:3px solid rgba(0,0,0,0.04);
border-top-left-radius:1rem;
border-top-right-radius:1rem;
padding-top:11px;
}
:focus{
outline:none!important;
}
.nav-link{
color:white!important;
font-size:1.2em!important;
}
.fnl{
margin-left:0px!important;
}
.navbar-brand{
    padding-top:0;
    margin-left:23vw;
    float:left;
}
.navbar-toggler{
border:none!important;
}
main{
padding-left:3.5vw;
padding-right:3.5vw;
}
::selection{
background:#8377d1;
color:white;
}

a{
color:#8377d1;
transition:all .1s ease-in-out;
text-decoration:none;
}
a:hover,a:focus{
color:#a095e6;
text-decoration:underline;
text-decoration-color:#a095e6;
}
.navbar-nav{
    padding-left:0px;
width: 267px;
    margin: auto;
    flex-direction:row;
}
#navbarNav{
    border-top:2px solid #fff;
    margin-top:6px;
    padding-top:4px;
}
.navbar-nav li{
    margin-left:20px;
}
.signout{
    color:#f7f7f7!important;
}
@media(min-width:992px){
    .navbar-nav{
        margin:0;
        width:auto;
        margin-left:24vw;
    }
    #navbarNav{
        margin-top:0px;
        padding-top:0px;
        border:none;
    }
    .navbar-nav li{
    margin-left:0px;
}
}
@media(max-width:1280px){
.navbar-brand{
    margin-left:5px;
}
}
.dop_block{
    width:100%;
    height:140px;
    float:left;
    clear:both;
    background:transparent;
}
.sign{
    width:40vw;
    margin-top:16.5vh;
    float:left;
    margin-left:136px;
}
.vector{
    width:450px;
    height:450px;
    float:right;
    margin-top:7.5vh;
    margin-right:90px;
}
.vector img{
    width:450px;
    height:450px;
}
.sign2{
    width:33vw;
}
.sign form input:not([type="submit"]){
    width:100%;
  
    height:auto;
    margin:auto;
    padding:10px;
    font-size:1.1em;
    border:1.3px solid transparent;
    background:#f0f0f0;
    border-radius:0.6rem;
    transition:all .3s ease-in-out;
}
.sign form label{
    margin-top:15px;
    font-size:1.45em;
}
h2:first-of-type{
    font-size:2.6em;
}
.sign form input:not([type="submit"]):hover{
    box-shadow: 0 0 0 0.2rem rgba(136, 119, 209, 0.18);
}
.sign form input:not([type="submit"]):focus{
box-shadow: 0 0 0 0.2rem rgba(136, 119, 209, 0.3);
border:1.3px solid #9a87ed;
background:white;
}
.sign form input[type="submit"]{
    padding:12px;
    margin-top:28px;
    border-radius:0.6rem;
    background:#8877d1;
    border:2px solid #8877d1;
    font-size:1.3em;
    width:130px;
    transition:.2s all ease-in-out;
    color:white;
    float:left;
}
.sign form input[type="submit"]:hover{
    background:#8171c7;
}
.sign form input[type="submit"]:focus{
    background:transparent;
    color:#8877d1;
}
.sign a{
    float:right;
    font-size:1.4em;
    margin-top:42px;
    margin-right:5px;
}
.backa{
    font-size:1.4em!important;
    margin-top:40px!important;
    display:block;
    width:60px;
}
@media(max-width:1368px){
    .vector{
        margin-top:11vh;
    }
}
@media(max-width:1279px){
    .vector{
        margin-right:70px;
    }
    .sign{
        margin-left:116px;
    }
}
@media(max-width:1201px){
    .vector{
        margin-right:50px;
    }
     .sign{
        margin-left:96px;
    }
}
@media(max-width:1123px){
    .vector{
        margin-right:30px;
    }
     .sign{
        margin-left:76px;
    }
}
@media(max-width:1050px){
    .vector{
        margin-right:10px;
    }
     .sign{
        margin-left:56px;
    }
}
@media(max-width:973px){
    .vector{
        display:none;
    }
    #login,#password{
        width:121%;
    }
     .sign{
       margin:auto;
        margin-top:11vh;
       float:none;
    }
    .sign a{
        margin-right:-7vw;
    }
    .sign h2{
        text-align:center;
    }
}
@media(max-width:790px){
.sign form input[type="submit"]{
    width:121%!important;
}
.sign a {
    float:left;
    margin-top:15px;
}
.sign{
    width:315px;
}
.sign2{
    width:261px;
}
}
</style><main class="page">
    <a class="backa" href="/">< Back</a>
    <div class="sign">
    <h2 class="welcome">Sign in to your Plorr account</h2>
    <div class="sign2">

<form method="post" action="/sign/sign.php">
    <label for="login">Login/mail:</label>
    <input type="text" name="login" id="login">
    <label for="password">Password:</label>
    <input id="password" type="password" name="password">
    <input type="submit" value="Sign in">
</form>
<a href="/reg">Haven't an account?</a>
</div></div>
<div class="vector"><img src="/sign/vector.png"></div>
<div class="dop_block"></div>
</main>
<nav class="navbar fixed-bottom navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="/"><img class="logo" src="/iconwhite.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item fnl">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/profile">Profile</a>
      </li>
       <li class="nav-item">
        <a class="nav-link signout" href="/sign?action=out">Sign out</a>
      </li>
    </ul>
  </div>
</nav>

</body></html>