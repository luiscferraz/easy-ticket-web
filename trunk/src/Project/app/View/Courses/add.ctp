<?php 
		echo $this->Form->create('Course', array('action' => 'add')); ?>


		<div class="left">
				
			<fieldset id="dados_aluno1">
				<legend class="legenda">Dados do Funcionário</legend>		

						<?php echo $this->Form->input('Course.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'nome'));
							?> <br>
				
			</fieldset>

			<div id="botaoCadastrarCurso"> 
				<?php echo $this->Form->end('Cadastrar Curso', array('id'=>'button')); ?> 
			</div>
		
		</div>