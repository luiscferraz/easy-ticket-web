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

				<?php echo $this->Form->input('Recharge.idTicketRecharge', array('options' => $list_items,'empty' => $empty,'type'=>'select','label' => 'Selecione o item 1: ', 'class'=>'itemList'));  ?> <br>	

				<?php echo $this->Form->input('Recharge.idTicketRecharge', array('options' => $list_items,'empty' => $empty,'type'=>'select','label' => 'Selecione o item 2: ', 'class'=>'itemList'));  ?> <br>

				<?php echo $this->Form->input('Recharge.idTicketRecharge', array('options' => $list_items,'empty' => $empty,'type'=>'select','label' => 'Selecione o item 3: ', 'class'=>'itemList'));  ?> <br>

				<?php echo $this->Form->input('Recharge.idTicketRecharge', array('options' => $list_items,'empty' => $empty,'type'=>'select','label' => 'Selecione o item 4: ', 'class'=>'itemList'));  ?> <br>

				<?php echo $this->Form->input('Recharge.idTicketRecharge', array('options' => $list_items,'empty' => $empty,'type'=>'select','label' => 'Selecione o item 5: ', 'class'=>'itemList'));  ?> <br>
							
			</fieldset>

			<fieldset id="dados2">
					<?php echo $this->Form->input('Student.birthday', array('label' => 'Data do cardápio: ','required'=>'required', 'id'=>'dataCardapio'));?> <br>

			</fieldset>


			<div id="botaoCadastrar"> 
				<?php echo $this->Form->end('Cadastrar cardápio', array('id'=>'button')); ?> 
			</div>
		
		</div>


			