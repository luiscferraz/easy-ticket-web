<?php

 class AlunosController extends AppController {

 	public function index(){
	    //Pega todos os elementos aluno e retorna na view
	    $this->set('title_for_layout', 'Aluno');
 		$this -> layout = 'IndexAluno';
 		$this -> set ('alunos', $this-> Aluno ->find('all'));
 	}

 	function add() {
        if (!empty($this->data)) {
            if ($this->Aluno->save($this->data)) {
                $this->Session->setFlash('O aluno foi cadastrado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function search() { 
        $this->set('results',$this->Aluno->search($this->data['Aluno']['q'])); 
    } 

 	
 }
 	
?>
