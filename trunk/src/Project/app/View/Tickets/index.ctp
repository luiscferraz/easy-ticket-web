<div id="cartaoindex">
	
<form method="post" action="tickets">
	<input class="numTicket" id="numTicket" type="text" name="numTicket" maxlength="14" />
	<input class="botao" id="botao-num" type="submit" value="Buscar cartão por número" />
</form>

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Id</th>
			<th>Número</th>
			<th>Aluno</th>
			<th>Status</th>
			<th>Saldo</th>
			<th>Ações</th>
		</tr>

		<?php
			
			$i = 0;

			foreach ($tickets as $ticket) 
			{
				#buscar apenas cartoes com status "ATIVO"
				if ($ticket['Ticket']['statusTicket'] == "ATIVO") {
					$class = null;
					
					if($i++ % 2 == 0)
					{
						$class = 'class="altrow"';
					}
					
				    foreach ($students as $student) { 
				    	if ($student['Student']['id'] == $ticket['Ticket']['idStudent']){
				    		$ticketStudent = $student['Student']['name'];
				    	}
				    }              
		?> 
		
		<tr <?php echo $class; ?>>
					<td class="nome"><?php echo $ticket['Ticket']['id']; ?></td>
					<td class="num"> <?php echo $ticket['Ticket']['numTicket']; ?></td>
					<td class="cpf"><?php echo $ticketStudent; ?></td>
					<td class="nome"><?php echo $ticket['Ticket']['statusTicket']; ?></td>
					<td class="dataNasc"><?php echo $ticket['Ticket']['balance']; ?></td>
					<td class="actions">

					<?php 
					echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
					array('action' => 'edit', $ticket['Ticket']['numTicket']),
					array('escape'=>false, 'class'=>'link'));
					?>

					<?php
					echo $this->Html->link($this->Html->image("delete.png",array('alt' => 'Remover')),
					array('action' => 'delete', $ticket['Ticket']['numTicket']),
					array('escape'=>false, 'class'=>'link'),
					"Confirmar exclusão do cartão pertencente ao aluno ". $ticketStudent . "?");
				}
			} 
					?>

			</td>
	</div>

		</tr>
		
	</table>
	
</div>
