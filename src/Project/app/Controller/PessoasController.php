<?php

 class PessoasController extends AppController {

 	public function index(){
	    //Pega todos os elementos pessoa e retorna na view
	    $this->set('title_for_layout', 'Pessoa');
 		$this -> layout = 'IndexPessoa';
 		$this -> set ('pessoas', $this-> Pessoa->find('all'));
 	}
 	
 }
 	
?>
