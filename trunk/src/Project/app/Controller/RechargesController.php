<?php

 class RechargesController extends AppController {
    public $uses = array ('Ticket', 'Recharge');

      public function index(){
        $this->set('title_for_layout', 'Recargas');
        $this->layout = 'index';

        if ($this->request->is('post')) {
            // Verifica se no array post existe cpf
            if (array_key_exists('cpf', $_POST)) {
                // Pega o cpf que foi digitado e coloca na variável $cpf

                $cpf =  $_POST['cpf'];
                echo $cpf;
                // Retorna as informações do aluno que possui o cpf informado
                $this->set('recharges', $this-> Recharge -> query 
                    ( "SELECT * FROM  (recharges INNER JOIN tickets ON recharges.idTicketRecharge = tickets.id) 
                        INNER JOIN students ON tickets.idStudent = students.id WHERE students.cpf = '" . $cpf . "'"));
            }
        else {
            $recharges = $this->Recharge->find('all');
            $this -> set ('recharges', $recharges);
            
        }
        }
           
        $recharges = $this->Recharge->find('all');
        $this -> set ('recharges', $recharges);

        $this->set('tickets',$this->Ticket->find('all'));
            
        }


        public function add($recharge = NULL) {
        $this->set('title_for_layout', 'Realizar Recarga');
        $this->layout = 'base';
        $this->set('tickets',$this->Ticket->find('all'));

        if (!empty($this->data)) {
            if($this->request->is('post')){
                if ($this -> verifica($this->request->data)) {
                    if($this->Recharge->saveAll($this->request->data)){
                        $idcartao = $this->request->data['Recharge']['idTicketRecharge'];
                        $valor = $this->request->data['Recharge']['rechargeValue'];
                        $this->Ticket->updateAll(
                            array(
                              'Ticket.balance' => 'Ticket.balance' + $valor
                            ), 
                            array('Ticket.id' => $idcartao));
                        $this->Session->setFlash('A recarga foi efetuada!.');
                        $this->redirect(array('action' => 'index'));

                    }
                    else{
                        $this->Session->setFlash('A recarga não foi efetuada!');
                    }       
                }

            }
            else{
                $this->Session->setFlash('A recarga não foi efetuada. Tente novamente!');        
            }   
        }
    }
 	
	 public function verifica($data) {
	    $ctr = 0;
	    $strerro = '';

        $ext = $this -> Ticket -> query ( "SELECT * FROM `tickets` WHERE id = '". $data['Recharge']['idTicketRecharge']."'" );   
	    #var_export($ext);
	    if (!empty($ext)){
            return true;
	    }
	    else {
            echo 'Cartão não existente';
            return false;
	    }
	}

 }
    
?>
