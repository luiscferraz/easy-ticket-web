<?php 
		echo $this->Form->create('Item', array('action' => 'edit')); ?>


		<div class="left">
				
			<fieldset id="dados2">
				<legend class="legenda">Item</legend>		

						<?php echo $this->Form->input('Item.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'nome'));
							?> <br>
				
			</fieldset>

			<div id="botaoCadastrarItem"> 
				<?php echo $this->Form->end('Cadastrar Item', array('id'=>'button')); ?> 
			</div>
		
		</div>