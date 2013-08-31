<div id="mealIndex">

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Tipo</th>
			<th>Preço</th>
			<th>Ações</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($meals as $meal) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
					
							
		?>

		<tr <?php echo $class; ?>>
			<td class="tipo"><?php echo $meal['Meal']['type']; ?></td>
			<td class="preco">R$ <?php echo $meal['Meal']['price']; ?></td>
			<td class="actions">
			<?php 
					echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
					array('action' => 'edit', $meal['Meal']['id']),
					array('escape'=>false, 'class'=>'link'));
					?>

					<?php
					echo $this->Html->link($this->Html->image("delete.png",array('alt' => 'Remover')),
					array('action' => 'delete', $meal['Meal']['id']),
					array('escape'=>false, 'class'=>'link'),
					"Confirmar exclusão da refeição ". $meal['Meal']['type'] . "?");
			?>
			</td>
		</tr>

		<?php } ?>
	</table>
	
</div>
