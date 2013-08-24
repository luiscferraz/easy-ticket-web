<?php

 class CoursesController extends AppController {

 	public function index(){
	    //Pega todos os elementos curso e retorna na view
	    $this->set('title_for_layout', 'Cursos');
 		$this -> layout = 'base';
 		$this -> set ('courses', $this->Course->find('all'));
 	}

 	function add() {
 		$this->set('title_for_layout', 'Cadastrar Curso');
 		$this -> layout = 'base';
        if (!empty($this->data)) {
            if ($this->Course->save($this->data)) {
                $this->Session->setFlash('O curso foi cadastrado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
 	
 }
 	
?>
