<?php

 class CursosController extends AppController {

 	public function index(){
	    //Pega todos os elementos curso e retorna na view
	    $this->set('title_for_layout', 'Curso');
 		$this -> layout = 'IndexPessoa';
 		$this -> set ('cursos', $this-> Curso->find('all'));
 	}
 	
 }
 	
?>
