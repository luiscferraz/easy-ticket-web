

<h1>Cadastrar Aluno</h1>

<?php 
		echo $this->Form->create('Aluno', array('action' => 'add')); ?>


		<?php 
		    foreach ($cursos as $curso) {        
		        $lista_cursos[$cursos['Curso']['id']] =$curso['Curso']['nome'];
		        };                    
		    if (!isset($lista_cursos)){
				$lista_cursos['none'] = 'Nenhum Curso Cadastrado';
		    }
		?>



		<div class="left">
				
			<fieldset id="dados_aluno1">
				<legend class="legenda">Dados do aluno</legend>		
				
						<?php echo $this->Form->input('Aluno.nome', array('label' => 'Nome: ','required'=>'required', 'id'=>'nome')); ?> <br>
						<?php echo $this->Form->input('Aluno.cpf', array('label' => 'CPF: ','required'=>'required', 'id'=>'cpf'));?> <br>
						<?php echo $this->Form->input('Aluno.dataNascimento', array('label' => 'Data de nascimento: ','required'=>'required', 'id'=>'dataNasc'));?> <br>
						<?php echo $this->Form->input('Aluno.telefone', array('label' => 'Telefone: ','required'=>'required', 'id'=>'telefone'));?> <br>
						<?php echo $this->Form->input('Aluno.email', array('label' => 'Email: ','required'=>'required', 'id'=>'email'));?> <br> 

						<?php echo $this->Form->end('Cadastrar aluno'); ?>
				
			</fieldset>

			<fieldset id="dados_aluno2">
						
						
						<?php echo $this->Form->input('Aluno.login', array('label' => 'Login: ','required'=>'required', 'id'=>'login'));?> <br>
						<?php echo $this->Form->input('Aluno.senha', array('label' => 'Senha: ', 'type'=>'password','required'=>'required', 'id'=>'senha'));?> <br>
						<?php echo $this->Form->input('Aluno.curso', array('options' => array("ATIVO", "INATIVO"), 'empty' => 'Selecione', 'type'=>'select','label' => 'Status: ', 'id'=>'curso')); ?> <br>
						<?php echo $this->Form->input('Aluno.curso', array('options' => $lista_cursos,'empty' => 'Selecione', 'type'=>'select','label' => 'Curso: ', 'id'=>'curso')); ?> <br>
						<?php echo $this->Form->input('Aluno.inicioCurso', array('label' => 'Início do curso: ','required'=>'required', 'id'=>'inicioCurso')); ?>  <br>
						<?php echo $this->Form->input('Aluno.terminoCurso', array('label' => 'Término do curso: ','required'=>'required', 'id'=>'terminoCUrso')); ?> <br>
					
			</fieldset>
		
		</div>





