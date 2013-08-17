<?php
class FunctionariesController extends AppController{
	public $uses = array ('Functionary');

 	  public function index(){
        //Pega todos os elementos funcionários e retorna na view
        $this->set('title_for_layout', 'Funcionário');
        $this->layout = 'IndexFuncionario';
        // Verifica se a requisição é do tipo post
        if ($this->request->is('post')) {
            // Verifica se no array post existe cpf
            if (array_key_exists('cpf', $_POST)) {
                // Pega o cpf que foi digitado e coloca na variável $cpf
                $cpf =  $_POST['cpf'];
                // Retorna as informações do aluno que possui o cpf informado
                $functionaries = $this->Functionary->find('all', array('conditions'=> array('cpf' => $cpf)));
                $this -> set('functionaries', $functionaries);
            }
        }else {
            $students = $this->Functionary->find('all');
            $this -> set ('functionaries', $functionaries);
            
        }

       
    }

}
?>