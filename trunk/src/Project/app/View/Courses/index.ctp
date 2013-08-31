<div id="cursoindex">

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Ações</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($courses as $course) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
					
							
		?>

		<tr <?php echo $class; ?>>
			<td class="idCurso"><?php echo $course['Course']['id']; ?></td>
			<td class="nome"><?php echo $course['Course']['name']; ?></td>
			<td class="actions">
			<?php 
					echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
					array('action' => 'edit', $course['Course']['id']),
					array('escape'=>false, 'class'=>'link'));
					?>

					<?php
					echo $this->Html->link($this->Html->image("delete.png",array('alt' => 'Remover')),
					array('action' => 'delete', $course['Course']['id']),
					array('escape'=>false, 'class'=>'link'),
					"Confirmar exclusão do funcionário ". $course['Course']['name'] . "?");
			?>
			</td>
		</tr>

		<?php } ?>
	</table>
	
</div>
