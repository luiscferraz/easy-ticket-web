<?php

 class MenusController extends AppController {
    public $uses = array ('Meal', 'Item', 'Menu', 'ItemMenu');

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
                    if($this->Menu->saveAll($this->request->data)){
                        $this->Session->setFlash('O cardápio foi adicionado com sucesso.');
                        $this->redirect(array('action' => 'index'));
                    }
                    else{
                        $this->Session->setFlash('Erro ao cadastrar cardápio!');
                    }       
                 
            }
            else{
                $this->Session->setFlash('O cardápio não foi adicionado. Tente novamente!');          
            
            }   
        }
        
    }
    


        
}
    
?>
