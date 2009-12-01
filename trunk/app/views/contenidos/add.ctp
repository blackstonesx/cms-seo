<?php echo $form->create('Contenido');?>
   <fieldset>
      <legend>Agregar un elemento a la tabla</legend>
     <?php
		echo $form->input('titulo');
		echo $form->input('contenido');
	 ?>
   </fieldset>
<?php echo $form->end('Agregar contenido');?>