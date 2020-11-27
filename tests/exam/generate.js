var btn_dataid = 0;
var z_index = 10;
for (var c in lines) {
    var newElement = document.createElement('div');
    var line_dop = lines[c].split('#')[0];
    var link_dop = lines[c].split('#')[1];
    newElement.className = "block";
    newElement.setAttribute('js-class','block');
    newElement.innerHTML = '<p class="line_h">' + link_dop + '</p><input type="text" placeholder="Введите стих.." class="text"><p class="out"></p><button class="quiz_btn_check" data-id="' + btn_dataid + '" data-answer="' + line_dop + '" onclick="check(this)">Проверить</button><button class="quiz_btn_go" onclick="show(true)">Пропустить</button>';
    btn_dataid++;
    z_index++;
    document.querySelector('section').appendChild(newElement);
    
}var dopblock = document.createElement('div');
dopblock.className = 'dop_block-mini';
document.body.appendChild(dopblock);
yearforline = yearforline.toString().substring(2,4);
document.querySelector('.quiz_end_tryagain').parentNode.setAttribute('href-data','/tests/exam/'+yearforline+'/'+quarterforline+'/');
const blocks = Array.from(document.getElementsByClassName('block'));
let r_blocks;
let go_count = 0;
function show(isgo) {
    if(isgo === true){go_count++;}
    r_blocks = Array.from(document.getElementsByClassName('block'));
    const m = Math.floor(Math.random() * r_blocks.length);
    for (let d of blocks) {
        if(d.hasAttribute('closed1')){
        d.style.transform = 'translateX(110vw)';    
        }
        else{
        d.style.transform = 'translateX(-110vw)';
    }}
    if (r_blocks.length) {
        r_blocks[m].style.transform = "translateX(0vw)";
        r_blocks[m].removeAttribute('class');
        r_blocks[m].setAttribute('closed1','');
    } else {
        document.querySelector('.quiz_end').style.transform = 'translateX(0vw)';
        document.querySelector('.quiz_end_result').innerHTML = 'Вы пропустили стихов: ' + go_count + '.';
        if(go_count <= 12){
            document.querySelector('.quiz_end_tryagain').classList.add('shouldnotrepeat');
            document.querySelector('.quiz_end_quit').classList.add('shouldnotrepeat');
        }
        document.querySelector('.quiz_end').style.display = 'block';
    }
}
show(false);
function equal(str1, str2) {
  function cut(str) {
    return str.replace(/[\,\:—]/g, "");
  }
  return cut(str1) == cut(str2);
}
function check(data){
    var btnid = data.getAttribute('data-id');
    var trueanswer = data.getAttribute('data-answer');
    var answer = document.querySelectorAll('.text')[btnid].value;
    if(equal(trueanswer,answer)){
        show(false);
    }
    else{
        document.querySelectorAll('.out')[btnid].innerHTML = 'Ошибка.';
    }
}
