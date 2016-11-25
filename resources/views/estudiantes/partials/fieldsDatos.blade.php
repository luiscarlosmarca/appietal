<div class="row uniform">
      <!-- datos personales -->
  <div class="6u 12u$(xsmall)">
    <label class="control-label" for="inputSuccess4">Documento de Identificación</label>
    <input type="text" name="numDoc" id="demo-name" value="" placeholder="Digite su numero de identificación" />
  </div>
  <div class="6u$ 12u$(xsmall)">
    <label class="control-label" for="inputSuccess4">Tipo Documento </label>

    <div class="select-wrapper">
      <select name="tipoDoc" id="demo-category">
        <option value="">- Tipo de documento -</option>
        <option value="Tarjeta de identidad">Tarjeta de identidad</option>
        <option value="Registro civil">Registro civil</option>
        <option value="Cedula">Cedula</option>

      </select>
    </div>
  </div>

  <div class="6u 12u$(xsmall)">
    <label class="control-label" for="inputSuccess4">Lugar de Nacimiento</label>
    <input type="text" name="lugarNa" id="demo-name" value="" placeholder="Lugar de Nacimiento" />
  </div>
  <div class="6u$ 12u$(xsmall)">
    <label class="control-label" for="inputSuccess4">Fecha de nacimiento</label>
    <input type="date" name="feNa" id="demo-email" value="" placeholder="Fecha de Nacimiento" />
  </div>

  <div class="6u 12u$(xsmall)">
    <label class="control-label" for="inputSuccess4">Dirección</label>

    <input type="text" name="direccion" id="demo-name" value="" placeholder="Digite su dirección" />
  </div>
  <div class="6u$ 12u$(xsmall)">
      <label class="control-label" for="inputSuccess4">Telefono</label>
    <input type="text" name="telefono"  value="" placeholder="Digite su telefono" />
  </div>

  <!-- datos generales -->
  <div class="4u 12u$(small)">
      <label class="control-label" for="inputSuccess4">Sexo</label>
    <div class="select-wrapper">
      <select name="sexo" id="demo-category">
        <option value="">- Sexo -</option>
        <option value="m">Masculino</option>
        <option value="f">Femenino</option>

      </select>
    </div>
  </div>

  <div class="4u 12u$(small)">
      <label class="control-label" for="inputSuccess4">Sisben</label>
    <input type="text" name="sisben" id="demo-name" value="" placeholder="Digite puntaje del sisben" />

  </div>

  <div class="4u 12u$(small)">
    <label class="control-label" for="inputSuccess4">Estracto</label>
    <input type="text" name="estracto" id="demo-name" value="" placeholder="Digite su estracto socioeconomico" />

<!-- Break -->

  </div>
  <div class="6u 12u$(xsmall)">
    <label class="control-label" for="inputSuccess4">Seguridad Social</label>
    <input type="text" name="seguridadS" id="demo-name" value="" placeholder="Digite su seguridad social (opcional)" />
  </div>
<div class="6u 12u$(xsmall)">
    <label class="control-label" for="inputSuccess4">Grupo sanguineo</label>
    <div class="select-wrapper">
      <select name="rh" id="demo-category">
        <option value="">- Grupo Sanguineo -</option>
        <option value="a+">A+</option>
        <option value="a-">A-</option>
        <option value="o+">O+</option>
        <option value="o-">O-</option>
        <option value="a+">AB+</option>
        <option value="a-">AB-</option>

      </select>
    </div>
  </div>
  <!-- Break -->


  <div class="6u$ 12u$(xsmall)">
    <label class="control-label" for="inputSuccess4">Procedencia</label>
    <input type="text" name="procedencia" id="demo-email" value="" placeholder="Digite la Procedencia" />
  </div>

  <!-- Break -->
  <div class="6u 12u$(small)">
    <input type="checkbox" id="demo-copy" name="desplazado" value="1">
    <label for="demo-copy">Desplazado</label>
  </div>

  <div class="6u$ 12u$(small)">
    <input type="checkbox"  name="madreC" value="2">
    <label for="demo-human">Madre Cabeza de familia </label>
  </div>
  <!-- Break -->

  <div class="12u$">
    <label class="control-label" for="inputSuccess4">Lugar de desplazamiento</label>
    <input type="text" name="lugarDeplazado" id="demo-message" placeholder="Digite el lugar de desplazamiento"></textarea>
  </div>
  <!-- Break -->
  <div class="12u$">
    <label class="control-label" for="inputSuccess4">Observaciones</label>
    <textarea name="observaciones" id="demo-message" placeholder="Observaciones " rows="6"></textarea>
  </div>

  <div class="3u 12u$(small)">
      <input type="file" name="foto" accept="image/*">
        <label for="demo-human"> Foto </label>
  </div>
 <!-- Break -->

  <div class="3u 12u$(small)">
    <input type="file" name="sisbenFile" accept="application/pdf">
    <label for="demo-human"> Sisben (formato PDF)</label>
  </div>

  <div class="3u 12u$(small)">
     <input type="file" name="epsFile" accept="application/*">
     <label for="demo-human"> EPS (formato PDF)</label>
  </div>

  <div class="3u 12u$(small)">
     <input type="file" name="docFile" accept="image/*" >
     <label for="demo-human"> Documento de identidad formato PDF)</label>
  </div>
  <!-- Break -->
  <div class="12u$">
    <ul class="actions">
      <li><input type="submit" value="Siguente paso" class="special" /></li>
      <li><input type="reset" value="Cancelar" /></li>
    </ul>
  </div>
</div>
