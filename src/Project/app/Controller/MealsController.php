<?php

 class mealsController extends AppController {
    public $uses = array ('Meal');

      public function index(){
        $this->set('title_for_layout', 'Refeições');
        $this->layout = 'index';
        // Verifica se a requisição é do tipo post
        if ($this->request->is('post')) {
            // Verifica se no array post existe cpf
            if (array_key_exists('type', $_POST)) {
                // Pega o tipo que foi digitado e coloca na variável $type
                $type =  $_POST['type'];
                // Retorna as informações da refeição que possui o tipo informado
                $meals = $this->Meal->find('all', array('conditions'=> array('tipo' => $type)));
                $this -> set('meals', $meals);
            }
        }else {
            $meals = $this->Meal->find('all');
            $this -> set ('meals', $meals);
            
        }

       
    }


    public function add() {
        $this->set('title_for_layout', 'Cadastrar Refeição');
        $this->layout = 'base';
        if (!empty($this->data)) {
            if($this->request->is('post')){
                if ($this -> verifica($this->request->data)) {
                    if($this->Meal->saveAll($this->request->data)){
                        $this->Session->setFlash($this->flashSuccess('A refeição foi adicionada com sucesso.'));
                        $this->redirect(array('action' => 'index'));
                    }
                    else{
                        $this->Session->setFlash($this->flashError('Erro ao cadastrar refeição!'));
                    }       
                }       
            }
            else{
                $this->Session->setFlash($this->Session->setFlash($this->flashError('A refeição não foi adicionada. Tente novamente!')));          
            
            }   
        }
        
    }
    


 public function verifica($data) {
    #echo $data['Meal']['cpf'];
    $ctr = 0;
    $strerro = '';

    //Aluno existente
    $ext = $this -> Meal -> query ( "SELECT * FROM `meals` WHERE type = '". $data['Meal']['type']."'" );
    #var_export($ext);
    if (!empty($ext)){
        $ctr ++;
        $strerro = $strerro . 'Refeição já cadastrada.';
    }

    if ($ctr > 0) {
        #procurar para definicao de erro
        #$this -> Session -> setFlash ($this -> flashError ($strerro));
        echo 'Refeição já cadastrada';
        return false;
    }
    else {
        return true;
    }
}





 }
    
?>
