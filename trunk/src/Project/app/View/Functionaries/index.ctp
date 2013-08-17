<h1><img id="miniLogo" src="/img/miniLogo.png" /> Funcionários</h1>

<div id="funcionarioindex">
	
<form method="post" action="functionaries">
	<input class="cpf" id="cpf" type="text" name="cpf" maxlength="14" />
	<input class="botao" id="botao-cpf" type="submit" value="Buscar funcionário por CPF" />
</form>

<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Nome</th>
			<th>CPF</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($functionaries as $functionary) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
					
							
		?>

		<tr <?php echo $class; ?>>
			<td class="nome"><?php echo $functionary['Functionary']['name']; ?></td>
			<td class="cpf"><?php echo $functionary['Functionary']['cpf']; ?></td>
			
		</tr>
		<?php } ?>
	</table>
	
</div>