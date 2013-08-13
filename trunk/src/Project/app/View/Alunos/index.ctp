
<div id="alunoindex">

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Nome</th>
			<th>CPF</th>
			<th>Data de nascimento</th>
			<th>Telefone</th>
			<th>Email</th>
			<th>Início do curso</th>
			<th>Término do curso</th>
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
			<td class="dataNasc"><?php echo $objAluno['Aluno']['dataNascimento']; ?></td>
			<td class="telefone"><?php echo $objAluno['Aluno']['telefone']; ?></td>
			<td class="email"><?php echo $objAluno['Aluno']['email']; ?></td>
			<td class="inicioCurso"><?php echo $objAluno['Aluno']['inicioCurso']; ?></td>
			<td class="terminoCurso"><?php echo $objAluno['Aluno']['terminoCurso']; ?></td>

		</tr>
		<?php } ?>
	</table>
	
</div>
