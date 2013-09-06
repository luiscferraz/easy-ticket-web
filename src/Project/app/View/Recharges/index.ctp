<div id="recargaindex">

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>Valor</th>
			<th>Data</th>
			<th>Número do cartão</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($recharges as $recharge) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}

				foreach ($tickets as $ticket) { 
				    	if ($ticket['Ticket']['id'] == $recharge['Recharge']['idTicketRecharge']){
				    		$ticketRecharge = $ticket['Ticket']['numTicket'];

				    		$saldoAntigo = $ticket['Ticket']['balance'];
				    		$valorRecarga = $recharge['Recharge']['rechargeValue'];
				    		$novoSaldo = $saldoAntigo + $valorRecarga;

				    		//echo $novoSaldo;

				    	}

			}
							
		?>





	<tr <?php echo $class; ?>>
			<td class="nome"><?php echo $recharge['Recharge']['id']; ?></td>
			<td class="cartao">R$<?php echo $recharge['Recharge']['rechargeValue']; ?></td>
			<td class="cartao"><?php echo $recharge['Recharge']['rechargeDate']; ?></td>
			<td class= "refeicao"><?php echo $ticketRecharge?> </td>
		</tr>

		<?php } ?>
	</table>
	

	
</div>