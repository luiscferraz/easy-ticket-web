<?php 
	echo $this->Form->create('Ticket', array('action' => 'edit')); ?>

		<?php 
		    foreach ($students as $student) { 
		    	$list_students[$student['Student']['id']] = $student['Student']['name'];
		    	#$list_students[] = $student['Student']['name'];
		    	}
		                         
		   		if (!isset($list_students)){
					$list_students['none'] = 'Nenhum aluno cadastrado';
		    	}			
		?> 

		<div class="left">
			<fieldset id="dados_aluno1">
				<legend class="legenda">Dados do cartão</legend>		
						<?php echo $this->Form->input('Ticket.idStudent', array('options' => $list_students, 'placeholder'=>'', 'empty' => 'Selecione', 'type'=>'select','label' => 'Aluno: ', 'id'=>'aluno')); ?> <br>		
						<?php echo $this->Form->input('Ticket.numTicket', array('label' => 'Número: ','placeholder'=>'', 'id'=>'name')); ?> <br>
						<?php echo $this->Form->input('Ticket.statusTicket', array('options' => array("ATIVO" => "ATIVO", "INATIVO" => "INATIVO", "BLOQUEADO" => "BLOQUEADO" ), 'placeholder'=>'', 'type'=>'select', 'empty' => 'Selecione', 'label' => 'Status: ')); ?><br>


		 		<?php echo $this->Form->end('Salvar dados', array('id'=>'buttonAddTicket')); ?> 	
			
			</fieldset>

		</div>
