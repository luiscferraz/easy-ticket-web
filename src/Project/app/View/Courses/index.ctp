	<?php
		echo $this->Html->link("Cadastrar novo curso", array('action' => '../courses/add/'), array('class'=>'botao', 'id'=>'botao-cadastrar-curso'));
	?>

<div id="cursoindex">

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Id</th>
			<th>Nome</th>

		</tr>

		<?php
			
			$i = 0;
			foreach ($courses as $objCourse) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
					
							
		?>

		<tr <?php echo $class; ?>>
			<td class="idCurso"><?php echo $objCourse['Course']['id']; ?></td>
			<td class="nome"><?php echo $objCourse['Course']['name']; ?></td>
		</tr>

		<?php } ?>
	</table>
	
</div>
