import Persona from "./Persona.js";
'use strict'; 

window.addEventListener('load', () => {
  const _form = document.forms['form-test'];
  let listDatos = [];
  _form.addEventListener('submit', (event) => {
      event.preventDefault();
      let changes = event.target;
      for(let i=1; i < changes.length-1;i++){
        localStorage.setItem(changes[i].name,changes[i].value);
        listDatos.push(changes[i].value);
      }
      for(let i = 0; i < changes.length-2; i++){
        console.log(listDatos[i]);
        changes[i].value = null;
      }
      function jsonPersona(list){
        this.nombre = list[0]; 
        this.apellido = list[1]; 
        this.gmail = list[2]; 
        this.telefono = list[3]; 
        this.fecha = list[4]; 
        this.edad = list[5]; 
        this.educacion = list[6]; 
      }
      let objPersona = new jsonPersona(listDatos);
      Object.freeze(objPersona);
      console.table(objPersona);
      localStorage.setItem("objJson", JSON.stringify(objPersona));
    //
      let arrayJson = Object.values(objPersona);
      let objClase = new Persona(arrayJson[0], arrayJson[1], arrayJson[2], arrayJson[3], arrayJson[4], arrayJson[5], arrayJson[6],);
      console.log(objClase.toString());
  }, false);
  ////////////////////////////////////////////////////////
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
