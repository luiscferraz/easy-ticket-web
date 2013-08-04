
<div id="cursoindex">

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Nome</th>

		</tr>

		<?php
			
			$i = 0;
			foreach ($cursos as $objCurso) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
					
							
		?>

		<tr <?php echo $class; ?>>
			<td class="nome"><?php echo $objCurso['Curso']['nome']; ?></td>
		</tr>

		<?php } ?>
	</table>
	
</div>
