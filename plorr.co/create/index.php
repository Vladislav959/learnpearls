<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1">
<title>Not found - Vladislav Gubarev - Web developer</title>

<link rel="stylesheet" type="text/css" href="/spectrum.css">
</head>
<body><style>
@font-face {
    font-family:'Golos';
    src: url('/golos.ttf');
}
:focus{
    outline:none;
}
.mainh{
margin-top:75px;
}
body{
    font-family:'Golos';
 font-size:1.15em;
}

.widget{
background:#f0f0f0;
border-radius:0.9rem;
padding:15px;
width:300px;
position:fixed;
bottom:13px;
left: 50%;
    margin-left: -175px;
}
.widget button{
color:white;
background:#0078ff;
border:none;
font-size:1em;
font-family:'Golos';
Padding:11px;
transition:all .3s ease-in;
border-radius:0.9rem;
}
.widget button:hover{
background:#469afa;
}
.widget button:focus{
background:#0b6fe0;
}
.widget p{
    margin:0;
    margin-bottom:10px;
text-align:center;
}
.btndiv{
width:124px;

Height:auto;
Margin:auto;
}
.page{
    padding:0 15vw;
}
.sign{
    width:500px; /* change the width value to change text inputs width */
}

form input:not([type="submit"]), select{
    width: 100%;
    height: auto;
    margin: auto;
    font-family:'Golos';
    font-size:1em;
    padding: 10px;
    border: 1.3px solid transparent;
    background:#f0f0f0;
    border-radius:0.6rem;
    margin-top:10px;
     margin-bottom:10px;
    transition: all .3s ease-in-out;
}

form label{
    margin-top:15px;
    font-size:1.35em;
}

form input:not([type="submit"]):hover, select:hover{
    box-shadow: 0 0 0 4px rgba(234,76,137,0.1); /* brand color with 0.1 transparency*/
    background:white;
    border:1.3px solid rgba(0,0,0,0.1);
}

form input:not([type="submit"]):focus, select:focus{
    box-shadow: 0 0 0 4px rgba(234,76,137,0.1); /* brand color with 0.1 transparency*/
    background:white;
    border:1.3px solid rgba(234,76,137,0.4); /* brand color with 0.1 transparency*/
}

form input[type="submit"]{
    padding:12px;
    margin-top:28px;
    border-radius:0.6rem;
    background:#ea4c89; /*brand color*/
    font-size:1.3em;
    width:130px;
    border:none;
    transition:.2s all ease-in-out;
    color:white;
    float:left;
}

form input[type="submit"]:hover{
    background:#f082ac; /* lighter brand color*/
}

form input[type="submit"]:active{
    background:#bb3d6e; /* lighter brand color*/
}
</style><div class="page">
<h2 class="mainh">Create a widget:</h2>
<div class="sign">
<form method="post" action="/create/create.php">
    <label for="widgettype">Type:</label>
    <select id="widgettype" class="widgettype" name="widgettype">
        <option value="instagram">Instagram</option>
        <option value="Twitter">Twitter</option>
        <option value="facebook">Facebook</option>
        <option value="dribbble">Dribbble</option>
        <option value="producthunt">ProductHunt</option>
        <option value="quiz">Quiz</option>
        <option value="rate">Rate</option>
        
    </select>
    <label for="widgettext">Text:</label>
    <input id="widgettext" type="text" name="widgettext">
    <label for="crosscolor">Cross color:</label>
    <input id="crosscolor" type="text" name="crosscolor">
    <label for="widgettextcolor">Text color:</label>
    <input type="text" name="widgettextcolor" id="color-picker" value='' />
    <label for="widgetbackground">Background:</label>
    <input id="widgetbackground" type="text" name="widgetbackground">
    <label for="widgetbutton">Button text:</label>
    <input id="widgetbutton" type="text" name="widgetbutton">
    <label for="widgetbuttonbackground">Button background:</label>
    <input id="widgetbuttonbackground" type="text" name="widgetbuttonbackground">
    <label for="widgetbuttoncolor">Button text color:</label>
    <input id="widgetbuttoncolor" type="text" name="widgetbuttoncolor">
    <label for="widgetbuttoncolorhover">Button text color on hover:</label>
    <input id="widgetbuttoncolorhover" type="text" name="widgetbuttoncolorhover">
    <label for="widgetbuttonbackgroundhover">Button background on hover:</label>
    <input id="widgetbuttonbackgroundhover" type="text" name="widgetbuttonbackgroundhover">
    <label for="widgetbuttoncolorfocus">Button text color on focus:</label>
    <input id="widgetbuttoncolorfocus" type="text" name="widgetbuttoncolorfocus">
    <label for="widgetbuttonbackgroundfocus">Button background on focus:</label>
    <input id="widgetbuttonbackgroundfocus" type="text" name="widgetbuttonbackgroundfocus">
    <div class="widgetstar"><label for="widgetstar">Star color:</label>
    <input id="widgetstar" type="text" name="widgetbuttonstar"></div>
    <div class="widgetdot"><label for="widgetstar">Dot color:</label>
    <input id="widgetdot" type="text" name="widgetdot"></div>
    <input type="submit" value="Create">
</form>
</div>
</div>
<!--<div class="widget">
<p>Rate my site:</p>
<div class="btndiv"><button>Okay</button>
<button style="margin-left:5px;">No</button></div>-->
<script type="text/javascript">
    window.onload = function() {
        var eSelect = document.querySelector('.widgettype');
         var widgetstar = document.querySelector('.widgetstar');
          var widgetdot = document.querySelector('.widgetdot');
        eSelect.onchange = function() {
            if(eSelect.selectedIndex === 1) {
                widgetdot.style.display = 'block';
                widgetstar.style.display = 'none';
            } else if(eSelect.selectedIndex === 2) {
                widgetdot.style.display = 'none';
                widgetstar.style.display = 'block';
            }
            else{
                widgetdot.style.display = 'none';
                widgetstar.style.display = 'none';
            }
        }
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2@2.0.0/dist/spectrum.min.js"></script><script>
$('#color-picker').spectrum({
  type: "component"
});</script>
</body>
</html>