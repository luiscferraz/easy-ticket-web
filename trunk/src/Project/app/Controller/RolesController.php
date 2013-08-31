<?php

 class RolesController extends AppController {
    public $uses = array ('Role');

 	  public function index(){
        $this->set('title_for_layout', 'Cargos');
        $this -> layout = 'index';

        $roles = $this->Role->find('all');
        $this -> set ('roles', $roles);
        }

 	public function add() {
        $this->set('title_for_layout', 'Cadastrar Cargo');
        $this->layout = 'base';
        if (!empty($this->data)) {
            if($this->request->is('post')){
                if ($this -> verifica($this->request->data)) {
                    if($this->Role->saveAll($this->request->data)){
                        $this->Session->setFlash('O cargo foi adicionado com sucesso.');
                        $this->redirect(array('action' => 'index'));
                    }
                    else{
                        $this->Session->setFlash($this->flashError('Erro ao cadastrar cargo!'));
                    }       
                }       
            }
            else{
                $this->Session->setFlash($this->Session->setFlash($this->flashError('O cargo não foi adicionado. Tente novamente!')));          
            }   
        }
        
    }
 	
    public function verifica($data) {
        #echo $data['Role']['name'];
        $ctr = 0;
        $strerro = '';

        //Aluno existente
        $ext = $this -> Role -> query ( "SELECT * FROM `roles` WHERE name = '". $data['Role']['name']."'" );
        #var_export($ext);
        if (!empty($ext)){
            $ctr ++;
            $strerro = $strerro . 'Cargo já cadastrado.';
        }

        if ($ctr > 0) {
            #procurar para definicao de erro
            #$this -> Session -> setFlash ($this -> flashError ($strerro));
            echo 'Cargo já cadastrado';
            return false;
        }
        else {
            return true;
        }
    }

    public function edit($id = NULL){
        $this->set('title_for_layout', 'Editar Cargo');
        $this->layout = 'base';
        $this->Role->id = $id;
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        $role = $this->Role->findById($id);
        if (!$role) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is('get')) {
            $this->request->data = $this->Role->read();
        } 
        else {
            $this->Role->id = $id;
            if ($this->Role->save($this->request->data)) {
                
                $this->Session->setFlash('Os dados do cargo foram editados!');
                $this->redirect(array('action' => 'index'));
            }
        }
   }

    public function delete($id) {
        $this->Role->delete($id);
        $this->Session->setFlash('O cargo foi deletado!');
        $this->redirect(array('action'=>'index'));
    }

 }
 	
?>
