<?php

 class StudentsController extends AppController {

 	  public function index(){
        //Pega todos os elementos aluno e retorna na view
        $this->set('title_for_layout', 'Aluno');
        $this->layout = 'IndexAluno';
        // Verifica se a requisição é do tipo post
        if ($this->request->is('post')) {
            // Verifica se no array post existe cpf
            if (array_key_exists('cpf', $_POST)) {
                // Pega o cpf que foi digitado e coloca na variável $cpf
                $cpf =  $_POST['cpf'];
                // Retorna as informações do aluno que possui o cpf informado
                $students = $this->Student->find('all', array('conditions'=> array('cpf' => $cpf)));
                $this -> set('students', $students);
            }
        }else {
            $students = $this->Student->find('all');
            $this -> set ('students', $students);
        }
    }


 	function add() {
        $this->layout = 'base';
        if (!empty($this->data)) {
            if ($this->Student->save($this->data)) {
                $this->Session->setFlash('O aluno foi cadastrado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
 	
 }
 	
?>
