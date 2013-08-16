<?php

 class CoursesController extends AppController {

 	public function index(){
	    //Pega todos os elementos curso e retorna na view
	    $this->set('title_for_layout', 'Curso');
 		$this -> layout = 'IndexCurso';
 		$this -> set ('courses', $this->Course->find('all'));
 	}

 	function add() {
        if (!empty($this->data)) {
            if ($this->Course->save($this->data)) {
                $this->Session->setFlash('O curso foi cadastrado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
 	
 }
 	
?>
