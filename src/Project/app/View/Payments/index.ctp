<div id="pagamentoindex">

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>Aluno</th>
			<th>Cartão</th>
			<th>Refeição</th>
			<th>Data</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($payments as $payment) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
							
		?>

		<tr <?php echo $class; ?>>
			<td class="nome"><?php echo $payment['payments']['id']; ?></td>
			<td class="cartao"><?php echo $payment['students']['name']; ?></td>
			<td class="cartao"><?php echo $payment['tickets']['numTicket']; ?></td>
			<td class= "refeicao"><?php echo $payment['meals']['type'];?> </td>
			<td class= "data"><?php echo $payment['payments']['date'];?> </td>
		</tr>

		<?php } ?>
	</table>
	

	
</div>