
<div id="alunoindex">
	
<form method="post" action="alunos">
	<input class="cpf" id="cpf" type="text" name="cpf" maxlength="14" />
	<input class="botao" id="botao-cpf" type="submit" value="Buscar aluno" />
</form>

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Nome</th>
			<th>CPF</th>
			<th>Data de nascimento</th>
			<th>Telefone</th>
			<th>Email</th>
			<th>Curso</th>
			<th>Início do curso</th>
			<th>Término do curso</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($alunos as $aluno) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
					
							
		?>

		<tr <?php echo $class; ?>>
			<td class="nome"><?php echo $aluno['Aluno']['nome']; ?></td>
			<td class="cpf"><?php echo $aluno['Aluno']['cpf']; ?></td>
			<td class="dataNasc"><?php echo $aluno['Aluno']['dataNascimento']; ?></td>
			<td class="telefone"><?php echo $aluno['Aluno']['telefone']; ?></td>
			<td class="email"><?php echo $aluno['Aluno']['email']; ?></td>
			<td class="curso"><?php echo $aluno['Aluno']['curso']; ?></td>
			<td class="inicioCurso"><?php echo $aluno['Aluno']['inicioCurso']; ?></td>
			<td class="terminoCurso"><?php echo $aluno['Aluno']['terminoCurso']; ?></td>

		</tr>
		<?php } ?>
	</table>
	
</div>
