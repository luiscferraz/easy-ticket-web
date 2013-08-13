
<div id="alunoindex">

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Nome</th>
			<th>CPF</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($alunos as $objAluno) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
					
							
		?>

		<tr <?php echo $class; ?>>
			<td class="nome"><?php echo $objAluno['Aluno']['nome']; ?></td>
			<td class="cpf"><?php echo $objAluno['Aluno']['cpf']; ?></td>
		</tr>
		<?php } ?>
	</table>
	
</div>
