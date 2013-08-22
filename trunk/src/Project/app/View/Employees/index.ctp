<h1><img id="miniLogo" src="/img/miniLogo.png" /> Funcionários</h1>

<div id="funcionarioindex">
	
<form method="post" action="employees">
	<input class="cpf" id="cpf" type="text" name="cpf" maxlength="14" />
	<input class="botao" id="botao-cpf" type="submit" value="Buscar funcionário por CPF" />
</form>

<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Nome</th>
			<th>CPF</th>
			<th>Data de Nascimento</th>
			<th>Telefone</th>
			<th>E-mail</th>
			<th>Cargo</th>
			<th>Status</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($employees as $employee) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
					
							
		?>

		<tr <?php echo $class; ?>>
			<td class="nome"><?php echo $employee['Employee']['name']; ?></td>
			<td class="cpf"><?php echo $employee['Employee']['cpf']; ?></td>
			<td class= "dataNascimento"><?php echo $employee['Employee']['birthday'];?> </td>
			<td class= "telefone"><?php echo $employee['Employee']['phone'];?> </td>
			<td class= "email"><?php echo $employee['Employee']['email'];?> </td>
			<td class= "cargo"><?php echo $employee['Employee']['role'];?> </td>
			<td class= "status"><?php echo $employee['Employee']['statusEmployee'];?> </td>
			
		</tr>
		<?php } ?>
	</table>
	
</div>