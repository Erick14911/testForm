<form id="form-test" action="<?php echo htmlspecialchars('templates/validate.php');?>" method="POST" >
        <fieldset>
          <legend>Formulario</legend>
          <p class="box_form form-group column mb-2">
             <label class="label" for="nombre">Nombre</label>
             <input id="nombre" class="input" name="nombre" type="text" required autofocus/> 
             <br/>  
             <label class="label" for="apellido">Apellido</label>
             <input id="apellido" class="input" name="apellido" type="text" required/> 
             <br/>  
             <label class="label" for="email">Email</label>
             <input id="email" class="input" name="email" type="email" required/>
             <br/>  
             <label class="label" for="telefono">Telefono</label>
             <input id="telefono" class="input" name="telefono" type="tel" required minlength="10" /> 
             <br/>  
             <label class="label" for="fecha">Fecha</label>
             <input id="fecha" class="input" name="fecha" type="date" require/>
             <br/>  
             <label class="label" for="edad">Edad</label>
             <input id="edad" class="input" name="edad" type="number" min="1" max="100"/>
             <br/>  
             <label class="label" for="educacion">Educacion</label>
             <select id="educacion" class="select" name="educacion">
               <option value="primaria">primaria</option>
               <option value="secundaria">secundaria</option>
               <option value="bachiller">bachiller</option>
               <option value="licenciatura">Licnciatura</option>
             </select>
          </p>
          <input class="button" name="submit" type="submit" value="Envar Formulario"/><br/>
        </fieldset>
      </form>
