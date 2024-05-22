'use strict'; 

window.addEventListener('load', () => {
// ASIGNAMOS LOS DATOS DEL FORMULARIO A LA CONSTANTE FORM
  const form = document.forms['form-test'];
// PROGRAMAMOS EL ESCUCHA DEL EVENTO SUBMIT SOBRE EL FORMULARIO  
  form.addEventListener('submit', (event) => {
    // CANCELAMOS EL REDIRECCIONAMIENTO EN EL ATRIBUTO ACTION DEL FORMULARIO
       event.preventDefault();
    // SE HACE UN RECORRIDO SOBRE LOS DATOS DEL FORMULARIO IMPRIMIENDO EN CONSOLA
      for(let i=1; i < form.length-1; i++){
        console.log(form[i].name," : ", form[i].value);
      }
    // SE HACE UN RECORRIDO SOBRE LOS DATOS DEL FORMULARIO GUARDANDO EN EL LOCALSTORAGE
      for(let i=1; i < form.length-1; i++){
        localStorage.setItem(form[i].name, form[i].value);
        // Se limpian los input de manera que el formulario quede en blanco
        form[i].value = null;
      }
  }, false);
});
