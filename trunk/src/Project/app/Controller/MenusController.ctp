<?php

 class MenusController extends AppController {
    public $uses = array ('Menu', 'Item');

      public function index(){
        $this->set('title_for_layout', 'Cardápios');
        $this->layout = 'index';

        $meals = $this->Menu->find('all');
        $this -> set ('menus', $menus);
            
        }

       
    }


    public function add() {
        $this->set('title_for_layout', 'Cadastrar Cardápio');
        $this->layout = 'base';
        if (!empty($this->data)) {
            if($this->request->is('post')){
                    if($this->Menu->saveAll($this->request->data)){
                        $this->Session->setFlash('O cardápio foi adicionado com sucesso!');
                        $this->redirect(array('action' => 'index'));
                    }
                    else{
                        $this->Session->setFlash('Erro ao cadastrar cardápio!'));
                    }       
                      
            }
            else{
                $this->Session->setFlash($this->Session->setFlash('O cardápio não foi adicionado. Tente novamente!')));          
            
            }   
        }
        
    }
    

    public function edit($id = NULL){
        $this->set('title_for_layout', 'Alterar Cardápio');
        $this->layout = 'base';
        $this->Menu->id = $id;
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        $menu = $this->Menu->findById($id);
        if (!$menu) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is('get')) {
            $this->request->data = $this->Menu->read();
        } 
        else {
            $this->Menu->id = $id;
            if ($this->Menu->save($this->request->data)) {
                
                $this->Session->setFlash('Os dados do cardápio foram editados!');
                $this->redirect(array('action' => 'index'));
            }
        }
   }

    public function delete($id) {
        $this->Menu->delete($id);
        $this->Session->setFlash('O cardápio foi deletada!');
        $this->redirect(array('action'=>'index'));
    }


 }
    
?>
