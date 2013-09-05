<?php

 class menusController extends AppController {
    public $uses = array ('Menu');

    public function index(){
    //Pega todos os elementos pagamento e retorna na view
    $this->set('title_for_layout', 'Cardápios');
    $this -> layout = 'index';
    $this->set('menus',
        $this-> Menu -> query ( "SELECT *   FROM 
            (meals INNER JOIN meal_has_menu 
            ON meals.id = meal_has_menu.idMeal) INNER JOIN menus ON meal_has_menu.idMenu = menus.id" ));
    }
        
}
    
?>
