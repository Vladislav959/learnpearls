const bodyEl = document.getElementsByTagName('body');
const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
if (currentTheme) {
    htmlEl.dataset.theme = currentTheme;
}
let delay = 275;
let destination;
let alllinks;
let allpage = document.querySelector('.page');
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
