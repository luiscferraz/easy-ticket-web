<title>Cadastro Funcionário</title>

<h1>Cadastrar Funcionário <img id="miniLogo" src="/img/miniLogo.png" /> </h1>

<?php 
		echo $this->Form->create('Employee', array('action' => 'add')); ?>


		<div class="left">
				
			<fieldset id="dados_aluno1">
				<legend class="legenda">Dados do Funcionário</legend>		

						<?php echo $this->Form->input('Employee.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'name')); ?> <br>
						<?php echo $this->Form->input('Employee.cpf', array('label' => 'CPF: ','required'=>'required', 'id'=>'cpf'));?> <br>
						<?php echo $this->Form->input('Employee.birthday', array('label' => 'Data de Nascimento: ','required'=>'required', 'id'=>'birthday'));?> <br>
						<?php echo $this->Form->input('Employee.phone', array('label' => 'Telefone: ','required'=>'required', 'id'=>'phone'));?> <br>
						<?php echo $this->Form->input('Employee.email', array('label' => 'E-mail: ','required'=>'required', 'id'=>'email'));?> <br> 
				
			</fieldset>

			<fieldset id="dados_aluno2">						
						
						<?php echo $this->Form->input('Employee.login', array('label' => 'Login: ','required'=>'required', 'id'=>'login'));?> <br>
						<?php echo $this->Form->input('Employee.password', array('label' => 'Senha: ', 'type'=>'password','required'=>'required', 'id'=>'password'));?> <br>
						<?php echo $this->Form->input('Employee.status', array('options' => array("ATIVO", "INATIVO"), 'empty' => 'Selecione', 'type'=>'select','label' => 'Status: ', 'id'=>'status')); ?> <br>
						<?php echo $this->Form->input('Employee.role', array('label' => 'Cargo: ','required'=>'required', 'id'=>'role'));?> <br>
					
			</fieldset>

			<div id="botaoCadastrar"> 
				<?php echo $this->Form->end('Cadastrar Funcionário', array('id'=>'button')); ?> 
			</div>
		
		</div>
