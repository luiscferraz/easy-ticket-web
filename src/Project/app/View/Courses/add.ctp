<title>Cadastrar Curso</title>

<h1><img id="miniLogo" src="/img/miniLogo.png" /> Cadastrar Curso</h1>

<?php 
		echo $this->Form->create('Course', array('action' => 'add')); ?>


		<div class="left">
				
			<fieldset id="dados_aluno1">
				<legend class="legenda">Dados do Funcionário</legend>		

						<?php echo $this->Form->input('Course.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'nome'));
							?> <br>
				
			</fieldset>

			<div id="botaoCadastrar"> 
				<?php echo $this->Form->end('Cadastrar Curso', array('id'=>'button')); ?> 
			</div>
		
		</div>