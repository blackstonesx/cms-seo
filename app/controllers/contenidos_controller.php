<?php
class ContenidosController extends AppController {
  
   var $name = 'Contenidos';
   var $helpers = array('Html', 'Form');
   var $scaffold;
   
   function index() {
      $this->set('contenidos', $this->Contenido->find('all'));
   }
   
   
   function add() {
	if (!empty($this->data)) {
		$this->Contenido->create();
		if ($this->Contenido->save($this->data)) {
			$this->Session->setFlash('Se guard&oacute; la p&aacute;gina.');
			$this->redirect(array('action'=>'index'), null, true);
		} else {
			$this->Session->setFlash('No se puede guardar la p&aacute;gina, intenta de nuevo.');
		}
	}
   }
}
?>