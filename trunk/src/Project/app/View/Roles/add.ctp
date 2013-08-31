<?php 
		echo $this->Form->create('Role', array('action' => 'add')); ?>


		<div class="left">
				
			<fieldset id="dados_aluno1">
				<legend class="legenda">Dados do Cargo</legend>		

						<?php echo $this->Form->input('Role.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'name')); ?> <br>
				
			</fieldset>


			<div id="botaoCadastrar"> 
				<?php echo $this->Form->end('Cadastrar cargo', array('id'=>'button')); ?> 
			</div>
		
		</div>
