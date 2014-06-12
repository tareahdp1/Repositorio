<?php
// No permitir el acceso directo al archivo ..
defined('_JEXEC') or die;
?>

<div id="ventanas">

        <form method="post" id="identificador" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_ctrl_proyecto.php')); ?>">
     <p>Nombre: <br />  <input name="nombre" type="text" id="textfield" size="5" /><br />
    <p>Universidad:  <br />  <input name="universidad" type="text" id="textfield" size="5" />
    <p>Pais:   <br />  <input name="pais" type="text" id="textfield" size="10" />
    <p>Responsable  :   <br />  <input name="responsable" type="text" id="textfield" size="5" />
    <p>Area de Estudio :   <br />  <input type="text" name="area" id="textfield" size="5"/>
    <p>Costo :   <br />  <input type="text" name="costo" id="textfield" size="5"/>
    <p>Anio :   <br />  <input type="text" name="año" id="textfield" size="5"/> 
    <p>Tipo :   <br />  <input type="text" name="tipo" id="textfield" size="5"/>
       </p>
    <p>
      <input type="submit" name="button" id="button" value="Enviar" />
      <br />
    </p>
        </form>
	
</div>