
<div id="pessoaindex">

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Nome</th>
			<th>CPF</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($pessoas as $objPessoa) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
					
							
		?>

		<tr <?php echo $class; ?>>
			<td class="nome"><?php echo $objPessoa['Pessoa']['nome']; ?></td>
			<td class="cpf"><?php echo $objPessoa['Pessoa']['cpf']; ?></td>
		</tr>
		<?php } ?>
	</table>
	
</div>
