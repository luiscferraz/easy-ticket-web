<?php

 class MenusController extends AppController {
    public $uses = array ('Meal', 'Item', 'Menu');

    public function index(){
     
    //Pega todos os elementos pagamento e retorna na view
    $this->set('title_for_layout', 'Cardápios');
    $this -> layout = 'index';

    $menus = $this->Menu->find('all');
    $this -> set ('menus', $menus);

    $this->set('items',$this->Item->find('all'));

    $this->set('menus',
      $this-> Menu -> query ( "SELECT *   FROM 
        (meals INNER JOIN meal_has_menu 
        ON meals.id = meal_has_menu.idMealFk) INNER JOIN menus ON meal_has_menu.idMenuFk = menus.id" ));
    }


     public function add() {
        $this->set('items',$this->Item->find('all'));
        $this->set('title_for_layout', 'Cadastrar Cardápio');
        $this->layout = 'base';
        if (!empty($this->data)) {
            if($this->request->is('post')){
                if ($this -> verifica($this->request->data)) {
                    if($this->Item->saveAll($this->request->data)){
                        $this->Session->setFlash('O item foi adicionado com sucesso.');
                        $this->redirect(array('action' => 'index'));
                    }
                    else{
                        $this->Session->setFlash('Erro ao cadastrar item!');
                    }       
                }       
            }
            else{
                $this->Session->setFlash('O item não foi adicionado. Tente novamente!');          
            
            }   
        }
        
    }
    


 public function verifica($data) {
    #echo $data['Meal']['cpf'];
    $ctr = 0;
    $strerro = '';

    //Aluno existente
    $ext = $this -> Item -> query ( "SELECT * FROM `items` WHERE type = '". $data['Item']['name']."'" );
    #var_export($ext);
    if (!empty($ext)){
        $ctr ++;
        $strerro = $strerro . 'Item já cadastrado.';
    }

    if ($ctr > 0) {
        #procurar para definicao de erro
        #$this -> Session -> setFlash ($this -> flashError ($strerro));
        echo 'Item já cadastrado';
        return false;
    }
    else {
        return true;
    }
}


        
}
    
?>
