<div id="itemIndex">

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Ações</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($itens as $item) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
					
							
		?>

		<tr <?php echo $class; ?>>
			<td class="idItem"><?php echo $item['Item']['id']; ?></td>
			<td class="nome"><?php echo $item['Item']['name']; ?></td>
			<td class="actions">
			<?php 
					echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
					array('action' => 'edit', $item['Item']['id']),
					array('escape'=>false, 'class'=>'link'));
					?>

					<?php
					echo $this->Html->link($this->Html->image("delete.png",array('alt' => 'Remover')),
					array('action' => 'delete', $item['Item']['id']),
					array('escape'=>false, 'class'=>'link'),
					"Confirmar exclusão do funcionário ". $item['Item']['name'] . "?");
			?>
			</td>
		</tr>

		<?php } ?>
	</table>
	
</div>
