<?php

 class StudentsController extends AppController {
    public $uses = array ('Course','Student');

 	  public function index(){
        //Pega todos os elementos aluno e retorna na view
        $this->set('title_for_layout', 'Aluno');
        $this->layout = 'IndexAluno';
        // Verifica se a requisição é do tipo post
        if ($this->request->is('post')) {
            // Verifica se no array post existe cpf
            if (array_key_exists('cpf', $_POST)) {
                // Pega o cpf que foi digitado e coloca na variável $cpf
                $cpf =  $_POST['cpf'];
                // Retorna as informações do aluno que possui o cpf informado
                $students = $this->Student->find('all', array('conditions'=> array('cpf' => $cpf)));
                $this -> set('students', $students);
            }
        }else {
            $students = $this->Student->find('all');
            $this -> set ('students', $students);
            
        }

       
    }


 	public function add() {
        $this->layout = 'base';
        $this->set('courses',$this->Course->find('all'));
        if (!empty($this->data)) {
            if($this->request->is('post')){
                if ($this -> verifica($this->request->data)) {
                    if($this->Student->saveAll($this->request->data)){
                        $this->Session->setFlash($this->flashSuccess('O estudante foi adicionado com sucesso.'));
                        $this->redirect(array('action' => 'index'));
                    }
                    else{
                        $this->Session->setFlash($this->flashError('Erro ao cadastrar atividade!'));
                    }       
                }       
            }
            else{
                $this->Session->setFlash($this->Session->setFlash($this->flashError('A atividade não foi adicionada. Tente novamente!')));          
            
            }   
        }
        
    }
 	


 public function verifica($data) {
    #echo $data['Student']['cpf'];
    $ctr = 0;
    $strerro = '';

    //Aluno existente
    $ext = $this -> Student -> query ( "SELECT * FROM `students` WHERE cpf = '". $data['Student']['cpf']."'" );
    #var_export($ext);
    if (!empty($ext)){
        $ctr ++;
        $strerro = $strerro . 'Aluno já cadastrado.';
    }

    if ($ctr > 0) {
        #procurar para definicao de erro
        #$this -> Session -> setFlash ($this -> flashError ($strerro));
        echo 'Aluno já cadastrado';
        return false;
    }
    else {
        return true;
    }
}





 }
 	
?>
