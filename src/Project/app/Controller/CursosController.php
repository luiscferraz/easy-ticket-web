<?php

 class CursosController extends AppController {

 	public function index(){
	    //Pega todos os elementos curso e retorna na view
	    $this->set('title_for_layout', 'Curso');
 		$this -> layout = 'IndexCurso';
 		$this -> set ('cursos', $this-> Curso->find('all'));
 	}

 	function add() {
        if (!empty($this->data)) {
            if ($this->Curso->save($this->data)) {
                $this->Session->setFlash('O curso foi cadastrado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
 	
 }
 	
?>
