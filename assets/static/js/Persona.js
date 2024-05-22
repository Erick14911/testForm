/*
 * object.function.apply(object2, arrayArguments);
 * object.prototype._property = value;
 * Object.values();
 * */

export default class Persona extends Object{
    
    static countId = 0;
 
    constructor(nombre, apellido, edad, telefono, email, educacion, fecha){
      super();
      this._id = ++Persona.countId;
      this._nombre = nombre;
      this._apellido = apellido;
      this._edad = edad;
      this._telefono = telefono;
      this._email = email;
      this._educacion = educacion;
      this._fecha = fecha;
    }
 
    toString(){
      return this._id + ' ' +super.toString();
    }
    
    datosBasicos(){
      return this._id + ', NOMBRE: ' + this._nombre + ' ' + this._apellido + ', EMAIL: ' + this._email + ', TELEFONO: ' + this._telefono;
    } 
 
    get nombre(){
      return this._nombre;
    }
 
    set nombre(nombre){
      this._nombre = nombre;
    }
    get apellido(){
      return this._apellido;
    }
 
    set apellido(apellido){
      this._apellido = apellido;
    }
    get edad(){
      return this._edad;
    }
 
    set edad(edad){
      this._edad = edad;
    }
    get telefono(){
      return this._telefono;
    }
 
    set telefono(telefono){
      this._telefono = telefono;
    }
    get email(){
      return this._email;
    }
 
    set email(email){
      this._email = email;
    }
    get educacion(){
      return this._educacion;
    }
 
    set educacion(educacion){
      this._educacion = educacion;
    }
    get fecha(){
      return this._fecha;
    }
 
    set fecha(fecha){
      this._fecha = fecha;
    }
  }

