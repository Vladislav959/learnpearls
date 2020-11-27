var cart_bg;
if(quarterforline == 1){
    cart_bg = '.line, .b1{background:linear-gradient(120deg,#6ed980, #66cc77);}';
}
else if(quarterforline == 2){
    cart_bg = '.line, .b1{background:linear-gradient(120deg,#46a3f0, #2196f3);}';
}
else if(quarterforline == 3){
    cart_bg = '.line, .b1{background:linear-gradient(120deg,#09cfe1, #07b5c5);}';
}
else if(quarterforline == 4){
    cart_bg = '.line, .b1{background:linear-gradient(120deg,#8090ec, #5c6bc0);}';
}
document.querySelector('.quarterstyles').innerHTML = cart_bg;
for (var c in lines) {
    var newElement = document.createElement('div');
    var link_dop = lines[c].split('#')[0];
    var line_dop = lines[c].split('#')[1];
    newElement.className = "block";
    newElement.innerHTML = '<div class="d1"><button class="b1">' + line_dop + '</button></div><div class="d2"><div class="line"><p>' + link_dop + '</p></div><button class="b2 bno twobtns">Я ответил неправильно</button><button class="b2 byes twobtns">Я ответил правильно</button></div></div>';
    document.querySelector('section').appendChild(newElement);
}
var dopblock = document.createElement('div');
dopblock.className = 'dop_block-mini';
document.body.appendChild(dopblock);
yearforline = yearforline.toString().substring(2);
document.querySelector('.end_a1').setAttribute('href-data','/tests/training/'+yearforline+'/'+quarterforline+'/');
var byes_count = 0;
var bno_count = 0;

function istwobtns(data){
    if(data.classList.contains('byes')){
           byes_count++;
           
       }
       else if(data.classList.contains('bno')){
           bno_count++;
       }
}
twobtns = document.querySelectorAll('.twobtns');
twobtns.forEach(twobtn => {
   twobtn.onclick = function() {
       istwobtns(this);
   };

});
        const blocks=Array.from(document.getElementsByClassName('block'));
let r_blocks;
function show(){r_blocks=Array.from(document.getElementsByClassName('block'));
const m=Math.floor(Math.random()*r_blocks.length);
for(let d of blocks){d.style.display='none'; d.querySelector('.d1').style.display="block";
  d.querySelector('.d2').style.display="none";}
if(r_blocks.length){r_blocks[m].style.display="block"; r_blocks[m].removeAttribute('class');} else{document.querySelector('.end').style.display = 'block'; document.querySelector('.ending').innerHTML = '<p class="end_t">Тренировка окончена!</p><p class="end_results"><span class="yesspan">Правильные</span> ответы: ' + byes_count + '</p><p class="end_results"><span class="nospan">Неправильные</span> ответы: ' + bno_count + '</p>'}}
show();
for(let d of document.querySelectorAll('.b2')){d.addEventListener('click', function(){show();})}
function changer(){
    this.parentNode.style.display="none"; 
    this.parentNode.nextElementSibling.style.display="block";}
for(let b of Array.from(document.querySelectorAll('.b1'))){b.onclick=changer}