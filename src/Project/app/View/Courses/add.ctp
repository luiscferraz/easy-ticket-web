<?php 
		echo $this->Form->create('Course', array('action' => 'add')); ?>


		<div class="left">
				
			<fieldset id="dados2">
				<legend class="legenda">Curso</legend>		

						<?php echo $this->Form->input('Course.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'nome'));
							?> <br>
				
			</fieldset>

			<div id="botaoCadastrarCurso"> 
				<?php echo $this->Form->end('Cadastrar Curso', array('id'=>'button')); ?> 
			</div>
		
		</div>