<?php 
		echo $this->Form->create('Role', array('action' => 'edit')); ?>


		<div class="left">
				
			<fieldset id="dados2">
				<legend class="legenda">Dados do Cargo</legend>		

						<?php echo $this->Form->input('Role.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'name')); ?> <br>
				
			</fieldset>


			<div id="botaoEditar"> 
				<?php echo $this->Form->end('Salvar dados');?> 
			</div>
		
		</div>
