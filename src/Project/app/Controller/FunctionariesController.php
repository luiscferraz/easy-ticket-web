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

   	public function add() {
        $this->layout = 'base';
        
        if (!empty($this->data)) {
            if($this->request->is('post')){
                if ($this -> verifica($this->request->data)) {
                    if($this->Functionary->saveAll($this->request->data)){
                        $this->Session->setFlash($this->flashSuccess('O funcionário foi adicionado com sucesso.'));
                        $this->redirect(array('action' => 'index'));
                    }
                    else{
                        $this->Session->setFlash($this->flashError('Erro ao cadastrar funcionário!'));
                    }       
                }       
            }
            else{
                $this->Session->setFlash($this->Session->setFlash($this->flashError('O funcionário não foi adicionada. Tente novamente!')));          
            
            }   
        }
        
    }
 	


	 public function verifica($data) {
	    #echo $data['Student']['cpf'];
	    $ctr = 0;
	    $strerro = '';

	    //Funcionário existente
	    $ext = $this -> Functionary -> query ( "SELECT * FROM `functionaries` WHERE cpf = '". $data['Functionary']['cpf']."'" );
	    #var_export($ext);
	    if (!empty($ext)){
	        $ctr ++;
	        $strerro = $strerro . 'Funcionário já cadastrado.';
	    }

	    if ($ctr > 0) {
	        #procurar para definicao de erro
	        #$this -> Session -> setFlash ($this -> flashError ($strerro));
	        echo 'Funcionário já cadastrado';
	        return false;
	    }
	    else {
	        return true;
	    }
}


}
?>