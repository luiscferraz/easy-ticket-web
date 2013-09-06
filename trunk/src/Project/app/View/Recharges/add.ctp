<?php 
		echo $this->Form->create('Recharge', array('action' => 'add')); ?>

		<?php 

		    foreach ($tickets as $ticket) { 
		    	$list_tickets[$ticket['Ticket']['id']] = $ticket['Ticket']['numTicket'];
		    	$empty = 'Selecione o cartão';
		    	#$list_tickets[] = $ticket['Ticket']['numTicket'];
		    	}
		                         
		   		if (!isset($list_tickets)){
					$empty = 'Nenhum cartão cadastrado';
					$list_tickets = [];
		    	}	

		?> 

		<div class="left">
				
			<fieldset id="dados1">
				<legend class="legenda">Recarga</legend>	
						<?php echo $this->Form->input('Recharge.idTicketRecharge', array('options' => $list_tickets,'empty' => $empty,'type'=>'select','label' => 'Selecione o cartão: ', 'class'=>'rechargeList'));  ?> <br>
						<?php echo $this->Form->input('Recharge.rechargeValue', array('label' => 'Valor da recarga: ','required'=>'required', 'id'=>'rechargeValue')); ?> <br>

			</fieldset>

			
			<div id='btnAddRecharge'>
				<?php echo $this->Form->end('Efetuar recarga', array('id'=>'button'));?>
			</div>
		
		</div>