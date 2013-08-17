

<h1><img id="miniLogo" src="/img/miniLogo.png" />  Cadastrar Aluno</h1>

<?php 
		echo $this->Form->create('Student', array('action' => 'add')); ?>


		<?php 

		    foreach ($courses as $course) { 
		    	$course['Course']['id_course'] = $course['Course']['name'];
		                         
		    if (!isset($courses)){
				$courses['none'] = 'Nenhum Curso Cadastrado';
		    }
	}
		?> 



		<div class="left">
				
			<fieldset id="dados_aluno1">
				<legend class="legenda">Dados do aluno</legend>		

						<?php echo $this->Form->input('Student.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'name')); ?> <br>
						<?php echo $this->Form->input('Student.cpf', array('label' => 'CPF: ','required'=>'required', 'id'=>'cpf'));?> <br>
						<?php echo $this->Form->input('Student.birthday', array('label' => 'Data de Nascimento: ','required'=>'required', 'id'=>'birthday'));?> <br>
						<?php echo $this->Form->input('Student.phone', array('label' => 'Telefone: ','required'=>'required', 'id'=>'phone'));?> <br>
						<?php echo $this->Form->input('Student.email', array('label' => 'E-mail: ','required'=>'required', 'id'=>'email'));?> <br> 
				
			</fieldset>

			<fieldset id="dados_aluno2">
						
						
						<?php echo $this->Form->input('Student.login', array('label' => 'Login: ','required'=>'required', 'id'=>'login'));?> <br>
						<?php echo $this->Form->input('Student.password', array('label' => 'Senha: ', 'type'=>'password','required'=>'required', 'id'=>'password'));?> <br>
						<?php echo $this->Form->input('Student.status', array('options' => array("ATIVO", "INATIVO"), 'empty' => 'Selecione', 'type'=>'select','label' => 'Status: ', 'id'=>'course')); ?> <br>
						<?php echo $this->Form->input('Student.course', array('options' => $courses,'empty' => 'Selecione', 'type'=>'select','label' => 'Curso: ', 'id'=>'course')); ?> <br>
						<?php echo $this->Form->input('Student.beginningCourse', array('label' => 'Início do curso: ','required'=>'required', 'id'=>'beginningCourse')); ?>  <br>
						<?php echo $this->Form->input('Student.endCourse', array('label' => 'Término do curso: ','required'=>'required', 'id'=>'endCourse')); ?> <br>
					
			</fieldset>

			<div id="botaoCadastrar"> 
				<?php echo $this->Form->end('Cadastrar aluno', array('id'=>'button')); ?> 
			</div>
		
		</div>





