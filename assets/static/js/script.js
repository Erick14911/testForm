'use strict'; 

window.addEventListener('load', () => {
  const form = document.forms['form-test'];
  form.addEventListener('submit', (event) => {
      for(let i=1; i < form.length-1;i++){
        localStorage.setItem(form[i].name, form[i].value);
      }
  }, false);
});
