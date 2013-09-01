<?php 
		echo $this->Form->create('Payment', array('action' => 'add')); ?>

		<?php 
		    foreach ($meals as $meal) { 
		    	$list_meals[$meal['Meal']['price']] = $meal['Meal']['type'];
		    	$empty = 'Selecione a refeição';
		    	#$list_meals[] = $meal['Meal']['name'];
		    	}
		                         
		   		if (!isset($list_meals)){
					$empty = 'Nenhuma refeição cadastrada';
					$list_meals = [];
		    	}	

		    foreach ($tickets as $ticket) { 
		    	$list_tickets[$ticket['Ticket']['id']] = $ticket['Ticket']['numTicket'];
		    	$empty = 'Selecione o cartão';
		    	#$list_tickets[] = $ticket['Ticket']['name'];
		    	}
		                         
		   		if (!isset($list_tickets)){
					$empty = 'Nenhum cartão cadastrado';
					$list_tickets = [];
		    	}					
		?> 

		<div class="left">
				
			<fieldset id="dados1">
				<legend class="legenda">Seleção de Refeição</legend>	
						<?php echo $this->Form->input('Payment.value', array('options' => $list_meals,'empty' => $empty,'type'=>'select','label' => 'Selecione a refeição pertencente aos novos pagamentos: ', 'class'=>'mealList'));  ?> <br>
			</fieldset>

			<fieldset id="dados2">						
						<?php echo $this->Form->input('Payment.idTicket', array('options' => $list_tickets,'empty' => $empty,'type'=>'select','label' => 'Nº Ticket: ', 'class'=>'ticketList'));  ?> <br>
			</fieldset>

			<?php echo $this->Form->end('Registrar Pagamento', array('id'=>'button')); ?> 
			
		
		</div>