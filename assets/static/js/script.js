'use strict'; 

window.addEventListener('load', () => {
  const _form = document.forms['form-test'];
  _form.addEventListener('submit', (event) => {
      let changes = event.target;
      for(let i=1; i < _form.length-1;i++){
        localStorage.setItem(_form[i].name,_form[i].value);
      }
  }, false);
  const registro = document.querySelector('#section');
  const consulta = document.querySelector('#section2');
  function switchDisplayRegistro(){
    if(registro.getAttribute("class")==="oculta"){
      registro.setAttribute("class","muestra");
      if(consulta.getAttribute('class')==="muestra"){
        consulta.setAttribute('class','oculta');
      }
    }   
  }
  function switchDisplayConsulta(){
    if(consulta.getAttribute("class")==="oculta"){
      consulta.setAttribute("class","muestra");
      if(registro.getAttribute('class')==="muestra"){
        registro.setAttribute('class','oculta');
      }
    }   
  }
  const btnRegistro = document.querySelector('#btnRegistro');
  const btnConsulta = document.querySelector('#btnConsulta');
  btnRegistro.addEventListener('click', switchDisplayRegistro, false);
  btnConsulta.addEventListener('click', switchDisplayConsulta, false);
});
