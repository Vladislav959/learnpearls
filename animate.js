var delay = 275;
var destination;
var alllinks;
var allpage = document.querySelector('.page');
allpage.classList.add('fadein');
setTimeout(function(){
allpage.classList.remove('fadein');
alllinks = document.querySelectorAll('a');
alllinks.forEach(btn => {
   btn.onclick = function() {
       
       allpage.classList.add('fadeout');
       destination = this.getAttribute('href-data');
    setTimeout(function(){ window.location = destination; }, delay);
   };
});
}, 600);