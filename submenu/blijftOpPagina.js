let heeftSub = document.querySelectorAll('.hasSubmenu a');
console.log(hasSubmenu);

for (let i=0, i<hasSubmenu.length; i++) {
  hasSubmenu[i].addEventListener('click', (e)=> e.preventDefault());
}
