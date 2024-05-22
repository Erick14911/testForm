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
      for(let i = 0; i < changes.length-1; i++){
        console.log(listDatos[i]);
      }
  }, false);
  ////////////////////////////////////////////////////////
  let _arrayJson = Object.values(_json);
  const _json = {
    [_id]: {..._json1},
    mssg,
    delBack: (v) => { return _json[v];},
    set mssg(mssg){
      this.mssg = mssg;
    }
    get _toString(){
      return this.mssg;
    }
  };
  /* delete _json.mssg; Object.assign(_json1,_json2);
   * const {mssg, ...obj} = _json;
   * const {name: rename, subJson: {data}} = _json
   * Object.seal(_json); // Object.freeze(_json); */
  function Const(atr){
    this.atr = atr; 
    this.toString = (args) => {
      return args + ' ' + this.atr;
    };
  }
//  Objeto.prototype.newAtr = '';
  let _obj = new Const()
  console.log(_obj.atr?.data);
//  let _arrayArgs = [];
//  _obj.toString.apply(_obj2,_arrayArgs);
  Object.seal(_obj); // Object.freeze(_json);
  let objPersona = new Persona('Luis','Torres',32,'4488339922','torre11@gmail.com','Licenciatura','fecha');
  console.log(objPersona.toString());
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
