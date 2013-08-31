<?php
class EmployeesController extends AppController{
	public $uses = 'Employee';

 	  public function index(){
        //Pega todos os elementos funcionários e retorna na view
        $this->set('title_for_layout', 'Funcionários');
        $this -> layout = 'index';
        // Verifica se a requisição é do tipo post
        if ($this->request->is('post')) {
            // Verifica se no array post existe cpf
            if (array_key_exists('cpf', $_POST)) {
                // Pega o cpf que foi digitado e coloca na variável $cpf
                $cpf =  $_POST['cpf'];
                // Retorna as informações do aluno que possui o cpf informado
                $employees = $this->Employee->find('all', array('conditions'=> array('cpf' => $cpf)));
                $this -> set('employees', $employees);
            }
        }else {
            $employees = $this->Employee->find('all');
            $this -> set ('employees', $employees);
            
        }

       
    }

   	public function add() {
        $this->set('title_for_layout', 'Cadastrar Funcionário');
        $this->layout = 'base';
        
        if (!empty($this->data)) {
            if($this->request->is('post')){
                if ($this -> verifica($this->request->data)) {
                    if($this->Employee->saveAll($this->request->data)){
                        $this->Session->setFlash('O funcionário foi adicionado com sucesso.');
                        $this->redirect(array('action' => 'index'));
                    }
                    else{
                        $this->Session->setFlash('Erro ao cadastrar funcionário!');
                    }       
                }       
            }
            else{
                $this->Session->setFlash($this->Session->setFlash('O funcionário não foi adicionada. Tente novamente!'));          
            
            }   
        }
        
    }
 	


	 public function verifica($data) {
	    #echo $data['Employee']['cpf'];
	    $ctr = 0;
	    $strerro = '';

	    //Funcionário existente
        $ext = $this -> Employee -> query ( "SELECT * FROM `employees` WHERE cpf = '". $data['Employee']['cpf']."'" );   
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