<?php 
		echo $this->Form->create('Menu', array('action' => 'add')); ?>


		<?php 

		    foreach ($items as $item) { 
		    	$list_items[$item['Item']['id']] = $item['Item']['name'];
		    	$empty = 'Selecione o item';
		    	#$list_items[] = $item['Item']['name'];
		    	}
		                         
		   		if (!isset($list_items)){
					$empty = 'Selecione o item';
					$list_items = [];
		    	}	

		?> 



		<div class="left">
				
			<fieldset id="dados1">
				<legend class="legenda">Selecionar itens</legend>

				<?php echo $this->Form->input('Menu.id', array('type' => 'hidden')); ?>				

				<?php echo $this->Form->input('ItemMenu.item_id', array('options' => $list_items,'empty' => $empty,'type'=>'select','label' => 'Selecione o item 1: ', 'class'=>'itemList'));  ?> <br>	

				
							
			</fieldset>


			<div id="botaoCadastrar"> 
				<?php echo $this->Form->end('Cadastrar cardápio', array('id'=>'button')); ?> 
			</div>
		
		</div>


			