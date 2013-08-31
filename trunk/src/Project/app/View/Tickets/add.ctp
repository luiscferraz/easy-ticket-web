<?php 
	echo $this->Form->create('Ticket', array('action' => 'add')); ?>

		<?php 
		    foreach ($students as $student) { 
		    	$list_students[$student['Student']['id']] = $student['Student']['name'];
		    	#$list_students[] = $student['Student']['name'];
		    	}
		                         
		   		if (!isset($list_students)){
					$list_students['none'] = 'Nenhum aluno cadastrado';
		    	}	

		?> 

		<?php $i = 0; ?>
		<?php foreach ($tickets as $ticket) 
			{
			
			$class = null;
		
				if($i++ % 2 == 0)
					{
						$class = 'class="altrow"';
					}
					
			}	               
		?> 

		<?php $number = mt_rand() ?>


		<div class="left">
			<fieldset id="dados2">
				<legend class="legenda">Dados do cartão</legend>		
						<?php echo $this->Form->input('Ticket.idStudent', array('options' => $list_students,'empty' => 'Selecione', 'type'=>'select','label' => 'Aluno: ', 'id'=>'aluno')); ?> <br>
						<!--<label>Número:</label><?php echo $number; ?> <br><br> -->
						<?php echo $this->Form->input('Ticket.numTicket', array('label' => 'Número: ','value' => $number, 'required'=>'required', 'id'=>'number')); ?> <br>
						<?php echo $this->Form->input('Ticket.statusTicket', array('options' => array("ATIVO" => "ATIVO", "INATIVO" => "INATIVO", "BLOQUEADO" => "BLOQUEADO" ), 'type'=>'select', 'empty' => 'Selecione', 'label' => 'Status: ')); ?><br> 	
			</fieldset>
		</div>

		<?php echo $this->Form->end('Cadastrar cartão', array('id'=>'buttonAddTicket')); ?>