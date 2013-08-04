<?php

 class AlunosController extends AppController {

 	public function index(){
    //Pega todos os elementos aluno e retorna na view
    $alunos = $this->Aluno->find('all')
 		$this->set('alunos', $alunos);
 	}
 	
 }
 	
?>
