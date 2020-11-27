var data_id = 0;
 function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(';').shift();
}
var bg_color;
if(quarterforline == 1){
bg_color = 'linear-gradient(120deg,#71e384, #66cc77)';
}
else if(quarterforline == 2){
bg_color = 'linear-gradient(120deg,#46a3f0, #2196f3)';
}
else if(quarterforline == 3){
bg_color = 'linear-gradient(120deg,#07c7d9, #01aebe)';
}
else if(quarterforline == 4){
bg_color = 'linear-gradient(120deg,#7d8de9, #5c6bc0)';
}
for (var c in lines) {
    var newElement = document.createElement('div');
    var line = lines[c].split('#')[0];
    var question_num = ',';
    line = line.replace(/;/g, question_num); 
    var link = lines[c].split('#')[1];
    var date = lines[c].split('#')[2];
    var testcookie = getCookie('starlist');
    var actions_inner;
    newElement.className = "cart";
    newElement.setAttribute('style','background:' + bg_color);
    newElement.setAttribute('data-id',data_id);
    var currid = parseInt(data_id, 10);
    currid = currid + 1;
    var element_content = yearforline + '#' + quarterforline + '#' + currid;
    if(testcookie !== undefined){
    if(testcookie.includes(element_content)){
    actions_inner = '<div class="actions" data-id="' + data_id + '"><svg xmlns="http://www.w3.org/2000/svg" class="star_outlined" style="display:none" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg><svg class="star_filled" style="display:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg></div>';
    }
    else{
        actions_inner = '<div class="actions" data-id="' + data_id + '"><svg xmlns="http://www.w3.org/2000/svg" class="star_outlined" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg><svg class="star_filled" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg></div>';
    }
    }
    else{
        actions_inner = '<div class="actions" data-id="' + data_id + '"><svg xmlns="http://www.w3.org/2000/svg" class="star_outlined" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg><svg class="star_filled" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg></div>';
   
    }
    newElement.innerHTML = '<p class="datet">' + date + '</p>' + actions_inner + '<p class="maint">' + line + '</p><p class="quartert">' + link + '</p>';
    
    document.querySelector('section').appendChild(newElement);
    data_id++;
                            }
                            

	    /*var tocompressall = document.querySelectorAll('.cart');
	    var tocompresstext = '"' + quarterforline + '":[{';
	    var tocompresscount = 1;
	    var tocompressnumber = 0;
	    tocompressall.forEach(cart => {
	        tocompresstext += '"' + tocompresscount + '":{"link":"' + document.querySelectorAll('.quartert')[tocompressnumber].innerHTML + '", "line":"' + document.querySelectorAll('.maint')[tocompressnumber].innerHTML + '", "date":"' + document.querySelectorAll('.datet')[tocompressnumber].innerHTML + '"},';
	    tocompresscount++;
	    tocompressnumber++;
	    });
	    tocompresstext = tocompresstext.substring(0, tocompresstext.length - 1);
	    tocompresstext += '}]';
	    var cod = document.createElement('input');
	    cod.value = tocompresstext;
	    cod.className = 'cod';
	    document.querySelector('section').appendChild(cod);*/
	
function copy (idc) {
    var text = document.querySelectorAll('.maint')[idc].textContent + " (" + document.querySelectorAll('.quartert')[idc].textContent + ")";
    var x = document.createElement("INPUT");
    x.setAttribute("type", "text");
    x.setAttribute("value", text);
    document.body.appendChild(x);
    var elem = document.querySelector('INPUT');
    elem.select();
    document.execCommand('copy');
    elem.parentNode.removeChild(elem);
    document.querySelector('.copied_badge').classList.add('dblock');
    setTimeout(function(){document.querySelector('.copied_badge').classList.remove('dblock');},2500);
}
function setupActions(){
var star_outlined_all = document.querySelectorAll('.star_outlined');
star_outlined_all.forEach(btn => {
   btn.onclick = function() {
       tostarlist(this.parentNode.getAttribute('data-id'));
   };

});
var star_filled_all = document.querySelectorAll('.star_filled');
star_filled_all.forEach(btn => {
   btn.onclick = function() {
       tostarlist(this.parentNode.getAttribute('data-id'));
   };

});
var copy_all = document.querySelectorAll('.copy');
copy_all.forEach(btn => {
   btn.onclick = function() {
        copy(this.parentNode.getAttribute('data-id'));
   };

});}
/* function alltrim (p) {
  return p.replace (/\s+/g, ' ').replace(/(^\s*)|(\s*)$/g, '');
 }

 function doRemovingNl(varia) { 
  let str = varia;
  let arr = str.split("\n");
  let result = '';
  let len=arr.length;
  for (let i=0; i<len; i++) { //обработаем строки по одной - так экономичней
   let s = alltrim(arr[i]);
   if (s.length>0) result += s + ' ';
  }
  return alltrim(result);
 }*/
function tostarlist(idq){
    var currid = parseInt(idq, 10);
    currid = currid + 1;
    var currentline = '$' + yearforline + '#' + quarterforline + '#' + currid;
    var currentlinedel = yearforline + '#' + quarterforline + '#' + currid;
var cookietest = getCookie('starlist');
var now = new Date();
  var time = now.getTime();
  var expireTime = time + 1000*36000;
  now.setTime(expireTime);

if(cookietest === undefined){
  
    document.querySelectorAll('.actions')[idq].innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="star_outlined" style="display:none" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg><svg class="star_filled" style="display:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg>';
    document.cookie = "starlist=" + currentlinedel + "; expires=" + now.toGMTString() + "; path=/";
   
}
else {
    if(cookietest.includes(currentlinedel)){
        
        
        if(getCookie('starlist').split('$')[0] == currentlinedel){
            if(getCookie('starlist').split('$')[1] === undefined){
               cookietest = cookietest.replace (currentlinedel, ''); 
            }
            else{
        cookietest = cookietest.replace (currentlinedel + '$', '');
        }}
        else{
             cookietest = cookietest.replace (currentline, '');
        }
        
       
        document.cookie = "starlist=" + cookietest + "; expires=" + now.toGMTString() + "; path=/";
        if(cookietest == 'NaN' || cookietest === ''){
            document.cookie = "starlist=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
        }
       
        document.querySelectorAll('.actions')[idq].innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="star_outlined" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg><svg class="star_filled" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg>';
    }
    else{
        cookietest += currentline;
       
        document.cookie = "starlist=" + cookietest + "; expires=" + now.toGMTString() + "; path=/";
    
        document.querySelectorAll('.actions')[idq].innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="star_outlined" style="display:none" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M12 7.13l.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.18.56 2.41-2.12-1.28-1.03-.64-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg><svg class="star_filled" style="display:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path class="actions_svg" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg><svg class="copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg>';
    }
}
  setupActions();
}
setupActions();
var copyall1 = document.querySelectorAll('.cart');
var copyall_counter = 0;
function copyall(){
    var copyfinal = '';
    var copyall_length = copyall1.length;
    copyall_length = copyall_length - 1;
    while(copyall_counter < copyall_length){
       
        copyfinal += document.querySelectorAll('.maint')[copyall_counter].innerHTML + ' (' + document.querySelectorAll('.quartert')[copyall_counter].innerHTML + ')\n';
        copyall_counter++;
    }
    var x = document.createElement("INPUT");
    x.setAttribute("type", "text");
    x.setAttribute("value", copyfinal);
    document.body.appendChild(x);
    var elem = document.querySelector('INPUT');
    elem.select();
    document.execCommand('copy');
    elem.parentNode.removeChild(elem);
    document.querySelector('.copied_badge').classList.add('dblock');
    setTimeout(function(){document.querySelector('.copied_badge').classList.remove('dblock');},2500);
    copyall_counter = 0;
}
/*
var copyall_btn = document.createElement('button');
copyall_btn.setAttribute('style','background:' + bg_color);
copyall_btn.className = 'copyall';
copyall_btn.innerHTML = '<p><svg class="copyallsvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path class="actions_svg" d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg><span class="copyall_p">Скопировать всё</span></p>';
copyall_btn.setAttribute('onclick','copyall()');
document.querySelector('section').insertBefore(copyall_btn,document.querySelectorAll('.cart')[0]);
var copied_badge = document.createElement('div');
copied_badge.className = 'copied_badge';
copied_badge.innerHTML = '<p>Скопировано!</p>';
document.querySelector('section').appendChild(copied_badge);*/