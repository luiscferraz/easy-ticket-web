<?php 
	echo $this->Form->create('Student', array('action' => 'add')); ?>

		<?php 
		    foreach ($courses as $course) { 
		    	$list_courses[$course['Course']['id']] = $course['Course']['name'];
		    	#$list_courses[] = $course['Course']['name'];
		    	}
		                         
		   		if (!isset($list_courses)){
					$list_courses['none'] = 'Nenhum Curso Cadastrado';
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
						 <?php echo $this->Form->input('Student.statusStudent', array('options' => array("ATIVO" => "ATIVO", "INATIVO" => "INATIVO"), 'type'=>'select', 'empty' => 'Selecione', 'label' => 'Status: ')); ?><br>
						<?php echo $this->Form->input('Student.idCourse', array('options' => $list_courses,'empty' => 'Selecione', 'type'=>'select','label' => 'Curso: ', 'id'=>'course')); ?> <br>
						<?php echo $this->Form->input('Student.beginningCourse', array('label' => 'Início do curso: ','required'=>'required', 'id'=>'beginningCourse')); ?>  <br>
						<?php echo $this->Form->input('Student.endCourse', array('label' => 'Término do curso: ','required'=>'required', 'id'=>'endCourse')); ?> <br>
			</fieldset>
		</div>

		<?php echo $this->Form->end('Cadastrar aluno', array('id'=>'button')); ?> 
