<?php

 class PessoasController extends AppController {

 	public function index(){
    //Pega todos os elementos pessoa e retorna na view
    $pessoas = $this->Pessoa->find('all')
 		$this->set('pessoas', $pessoas);
 	}
 	
 }
 	
?>
