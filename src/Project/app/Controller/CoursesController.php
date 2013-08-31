<?php

 class CoursesController extends AppController {

 	public function index(){
	    //Pega todos os elementos curso e retorna na view
	    $this->set('title_for_layout', 'Cursos');
 		$this -> layout = 'index';
 		$this -> set ('courses', $this->Course->find('all'));
 	}

    public function add() {
        $this->set('title_for_layout', 'Cadastrar Curso');
        $this->layout = 'base';
        if (!empty($this->data)) {
            if($this->request->is('post')){
                if ($this -> verifica($this->request->data)) {
                    if($this->Course->saveAll($this->request->data)){
                        $this->Session->setFlash('O curso foi adicionado com sucesso.');
                        $this->redirect(array('action' => 'index'));
                    }
                    else{
                        $this->Session->setFlash($this->flashError('Erro ao cadastrar curso!'));
                    }       
                }       
            }
            else{
                $this->Session->setFlash($this->Session->setFlash($this->flashError('O curso não foi adicionado. Tente novamente!')));          
            }   
        }
        
    }
 	
    public function verifica($data) {
        #echo $data['course']['name'];
        $ctr = 0;
        $strerro = '';

        //Aluno existente
        $ext = $this -> Course -> query ( "SELECT * FROM `courses` WHERE name = '". $data['Course']['name']."'" );
        #var_export($ext);
        if (!empty($ext)){
            $ctr ++;
            $strerro = $strerro . 'Curso já cadastrado.';
        }

        if ($ctr > 0) {
            #procurar para definicao de erro
            #$this -> Session -> setFlash ($this -> flashError ($strerro));
            echo 'Curso já cadastrado';
            return false;
        }
        else {
            return true;
        }
    }

    public function edit($id = NULL){
        $this->set('title_for_layout', 'Editar curso');
        $this->layout = 'base';
        $this->Course->id = $id;
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
    
        $course = $this->Course->findById($id);
        if (!$course) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is('get')) {
            $this->request->data = $this->Course->read();
        } 
        else {
            $this->Course->id = $id;
            if ($this->Course->save($this->request->data)) {
                
                $this->Session->setFlash('Os dados do curso foram editados!');
                $this->redirect(array('action' => 'index'));
            }
        }
   }

    public function delete($id) {
        $this->Course->delete($id);
        $this->Session->setFlash('O curso foi deletado!');
        $this->redirect(array('action'=>'index'));
    }
 	
 }
 	
?>
