<?php
class PaymentsController extends AppController{
	public $uses = array ('Payment', 'Ticket', 'Meal');

 	public function index(){
        //Pega todos os elementos pagamento e retorna na view
        $this->set('title_for_layout', 'Registro de Pagamentos');
        $this -> layout = 'index';
        $this->set('payments',
            $this-> Ticket -> query ( "SELECT payments.id, payments.date, tickets.numTicket, students.name, payments.value   FROM 
                (payments INNER JOIN tickets ON payments.idTicket = tickets.id) INNER JOIN students 
                ON tickets.idStudent = students.id" ));
    }

   	public function add($meal = NULL) {
        $this->set('title_for_layout', 'Registrar Pagamentos');
        $this->layout = 'base';
        $this->set('meals',$this->Meal->find('all'));
        $this->set('tickets',$this->Ticket->find('all'));

        if (!empty($this->data)) {
            if($this->request->is('post')){
                if ($this -> verifica($this->request->data)) {
                    if($this->Payment->saveAll($this->request->data)){
                        $this->Session->setFlash('O pagamento foi adicionado com sucesso.');
                        $this->redirect(array('action' => 'index'));
                    }
                    else{
                        $this->Session->setFlash($this->flashError('Erro ao cadastrar pagamento!'));
                    }       
                }       
            }
            else{
                $this->Session->setFlash($this->Session->setFlash($this->flashError('O pagamento não foi adicionado. Tente novamente!')));          
            }   
        }
    }
 	
	 public function verifica($data) {
	    #echo $data['Employee']['cpf'];
	    $ctr = 0;
	    $strerro = '';

	    //Funcionário existente
        $ext = $this -> Ticket -> query ( "SELECT * FROM `tickets` WHERE id = '". $data['Payment']['idTicket']."'" );   
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