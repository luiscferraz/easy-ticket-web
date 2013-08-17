<h1><img id="miniLogo" src="/img/miniLogo.png" />  Cadastrar Funcionário</h1>

<?php 
		echo $this->Form->create('Functionary', array('action' => 'add')); ?>


		<div class="left">
				
			<fieldset id="dados_funcionario1">
				<legend class="legenda">Dados do Funcionário</legend>		

						<?php echo $this->Form->input('Functionary.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'name')); ?> <br>
						<?php echo $this->Form->input('Functionary.cpf', array('label' => 'CPF: ','required'=>'required', 'id'=>'cpf'));?> <br>
						<?php echo $this->Form->input('Functionary.birthday', array('label' => 'Data de Nascimento: ','required'=>'required', 'id'=>'birthday'));?> <br>
						<?php echo $this->Form->input('Functionary.phone', array('label' => 'Telefone: ','required'=>'required', 'id'=>'phone'));?> <br>
						<?php echo $this->Form->input('Functionary.email', array('label' => 'E-mail: ','required'=>'required', 'id'=>'email'));?> <br> 
				
			</fieldset>

			<fieldset id="dados_funcionario2">						
						
						<?php echo $this->Form->input('Functionary.login', array('label' => 'Login: ','required'=>'required', 'id'=>'login'));?> <br>
						<?php echo $this->Form->input('Functionary.password', array('label' => 'Senha: ', 'type'=>'password','required'=>'required', 'id'=>'password'));?> <br>
						<?php echo $this->Form->input('Functionary.status', array('options' => array("ATIVO", "INATIVO"), 'empty' => 'Selecione', 'type'=>'select','label' => 'Status: ', 'id'=>'status')); ?> <br>
						<?php echo $this->Form->input('Functionary.role', array('label' => 'Cargo: ','required'=>'required', 'id'=>'role'));?> <br>
					
			</fieldset>

			<div id="botaoCadastrar"> 
				<?php echo $this->Form->end('Cadastrar Funcionário', array('id'=>'button')); ?> 
			</div>
		
		</div>
