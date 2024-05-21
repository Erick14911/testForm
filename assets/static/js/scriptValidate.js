'use strict';

window.addEventListener('load', () => {

  if(navigator.cookieEnabled){
    console.log("cookies enabled");
  }
  if(typeof(Storage) !== 'undefined'){
    console.log("Localstorage disponible");
  }else{
    console.log("Incompatible");
  }
  const box_article = document.querySelector('#box-article');
  const box_data = document.querySelector('#box-data');
  let _label = document.createElement('h2');
  _label.classList.add('title');
  /* .appendChild(); .insertBefore(,  ); removeChild(); .replaceChild(, ); .remove(); */
  box_article.insertBefore(_label,box_data);
  _label.textContent = "Bienbenido "+localStorage.getItem('nombre')+" "+localStorage.getItem('apellido');

});
