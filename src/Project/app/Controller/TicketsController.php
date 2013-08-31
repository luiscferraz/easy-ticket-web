<?php

 class TicketsController extends AppController {
    public $uses = array ('Student','Ticket');

 	  public function index(){
        $this->set('title_for_layout', 'Cartões');
        $this -> layout = 'index';

        $this->set('students',$this->Student->find('all'));

        // Verifica se a requisição é do tipo post
        if ($this->request->is('post')) {
            // Verifica se no array post existe cpf
            if (array_key_exists('', $_POST)) {
                // Pega o cpf que foi digitado e coloca na variável $cpf
                $numTicket =  $_POST['numTicket'];
                // Retorna as informações do aluno que possui o cpf informado
                $student = $this->Student->find('all', array('conditions'=> array('numTicket' => $numTicket)));
                $this -> set('students', $students);
            }

        }else {
            $tickets = $this->Ticket->find('all');
            $this -> set ('tickets', $tickets);  
            
        }
        
    
    }


    public function add() {
        $this->set('title_for_layout', 'Cadastrar Cartão');
        $this->layout = 'base';
        $this->set('students',$this->Student->find('all'));
        if (!empty($this->data)) {
            if($this->request->is('post')){
                if ($this -> verifica($this->request->data)) {
                    if($this->Ticket->saveAll($this->request->data)){
                        $this->Session->setFlash('O cartão foi cadastrado com sucesso!');
                        $this->redirect(array('action' => 'index'));
                    }
                    else{
                        $this->Session->setFlash($this->flashError('Erro ao cadastrar cartão!'));
                    }       
                }       
            }
            else{
                $this->Session->setFlash($this->Session->setFlash($this->flashError('O cartão não foi cadastrado. Tente novamente.')));          
            }   
        }
        
    }


    public function verifica($data) {
        $this->set('tickets',$this->Ticket->find('all'));
        #echo $data['Student']['name'];
        $ctr = 0;
        $strerro = '';

        //Aluno selecionado já possui cartão
        $ext = $this -> Ticket -> query ( "SELECT * FROM `tickets` WHERE idStudent = '". $data['Ticket']['idStudent']."'" );
        #var_export($ext);
        if (!empty($ext)){
            $ctr ++;
            $strerro = $strerro . 'O aluno selecionado já possui um cartão cadastrado.';
        }

        if ($ctr > 0) {
            #procurar para definicao de erro
            #$this -> Session -> setFlash ($this -> flashError ($strerro));
            echo 'Aluno com cartão já cadastrado';
            return false;
        }
        else {
            return true;
        }
    }  


    public function edit($id = NULL){
        $this->set('title_for_layout', 'Editar dados do cartão');
        $this->layout = 'base';
        $this->set('students',$this->Student->find('all'));
        $this->Ticket->id = $id;
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        $ticket = $this->Ticket->findById($id);
        if (!$ticket) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is('get')) {
            $this->request->data = $this->Ticket->read();
        } 
        else {
            $this->Ticket->id = $id;
            if ($this->Ticket->saveAll($this->request->data)) {
                
                $this->Session->setFlash('Os dados do cartão foram editados!');
                $this->redirect(array('action' => 'index'));
            }
        }
   }



      public function delete($id) {
        $this->Ticket->delete($id);
        $this->Session->setFlash('O cartão foi deletado!');
        $this->redirect(array('action'=>'index'));
    }



}
 	




