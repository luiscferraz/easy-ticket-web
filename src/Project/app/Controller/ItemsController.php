<?php

 class ItemsController extends AppController {

 	public function index(){
	    //Pega todos os elementos item e retorna na view
	    $this->set('title_for_layout', 'Itens');
 		$this -> layout = 'index';
 		$this -> set ('itens', $this->Item->find('all'));
 	}

    public function add() {
        $this->set('title_for_layout', 'Cadastrar Item');
        $this->layout = 'base';
        if (!empty($this->data)) {
            if($this->request->is('post')){
                if ($this -> verifica($this->request->data)) {
                    if($this->Item->saveAll($this->request->data)){
                        $this->Session->setFlash('O item foi adicionado com sucesso.');
                        $this->redirect(array('action' => 'index'));
                    }
                    else{
                        $this->Session->setFlash($this->flashError('Erro ao cadastrar item!'));
                    }       
                }       
            }
            else{
                $this->Session->setFlash($this->Session->setFlash($this->flashError('O item não foi adicionado. Tente novamente!')));          
            }   
        }
        
    }
 	
    public function verifica($data) {
        #echo $data['Item']['name'];
        $ctr = 0;
        $strerro = '';

        //Aluno existente
        $ext = $this -> Item -> query ( "SELECT * FROM `items` WHERE name = '". $data['Item']['name']."'" );
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

    public function edit($id = NULL){
        $this->set('title_for_layout', 'Editar Item');
        $this->layout = 'base';
        $this->Item->id = $id;
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        $Item = $this->Item->findById($id);
        if (!$Item) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is('get')) {
            $this->request->data = $this->Item->read();
        } 
        else {
            $this->Item->id = $id;
            if ($this->Item->save($this->request->data)) {
                
                $this->Session->setFlash('Os dados do Item foram editados!');
                $this->redirect(array('action' => 'index'));
            }
        }
   }

    public function delete($id) {
        $this->Item->delete($id);
        $this->Session->setFlash('O Item foi deletado!');
        $this->redirect(array('action'=>'index'));
    }
 	
 }
 	
?>
