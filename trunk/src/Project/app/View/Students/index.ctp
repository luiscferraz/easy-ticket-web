
<h1><img id="miniLogo" src="/img/miniLogo.png" /> Alunos</h1>

<div id="alunoindex">
	
<form method="post" action="students">
	<input class="cpf" id="cpf" type="text" name="cpf" maxlength="14" />
	<input class="botao" id="botao-cpf" type="submit" value="Buscar aluno por CPF" />
</form>

	<?php
		echo $this->Html->link("Cadastrar novo aluno", array('action' => '../students/add/'), array('class'=>'botao', 'id'=>'botao-cadastrar-aluno'));

	?>

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Nome</th>
			<th>CPF</th>
			<th>Data de Nascimento</th>
			<th>Telefone</th>
			<th>E-mail</th>
			<th>Curso</th>
			<th>Início do Curso</th>
			<th>Término do Curso</th>
			<th>Ações</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($students as $student) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
					
							
		?>



		<tr <?php echo $class; ?>>
			<td class="nome"><?php echo $student['Student']['name']; ?></td>
			<td class="cpf"><?php echo $student['Student']['cpf']; ?></td>
			<td class="dataNasc"><?php echo $student['Student']['birthday']; ?></td>
			<td class="telefone"><?php echo $student['Student']['phone']; ?></td>
			<td class="email"><?php echo $student['Student']['email']; ?></td>
			<td class="curso"><?php echo $student['Student']['id_course']; ?></td>
			<td class="inicioCurso"><?php echo $student['Student']['beginningCourse']; ?></td>
			<td class="terminoCurso"><?php echo $student['Student']['endCourse']; ?></td>
			<td class="actions">

					
					<?php
					echo $this->Html->link($this->Html->image("delete.png",array('alt' => 'Remover')),
					array('action' => 'delete', $student['Student']['id']),
					array('escape'=>false, 'class'=>'link'),
					"Confirmar exclusão do aluno ". $student['Student']['name'] . "?"); 
					?>

					<?php 
					echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
					array('action' => 'edit', $student['Student']['id']),
					array('escape'=>false, 'class'=>'link'));
					}
					?>

			</td>
	</div>

		</tr>
		
	</table>
	
</div>
