<div id="menuIndex">

	<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Data</th>
			<th>Itens</th>
			<th>Refeicao</th>
			<th>Ações</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($menus as $menu) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
					
							
		?>

		<tr <?php echo $class; ?>>
			<td > </td>
			<td> </td>
			<td> </td>
			<td>
			<?php 
					echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
					array('action' => 'edit', $menu['Menu']['id']),
					array('escape'=>false, 'class'=>'link'));
					?>

					<?php
					echo $this->Html->link($this->Html->image("delete.png",array('alt' => 'Remover')),
					array('action' => 'delete', $menu['Menu']['id']),
					array('escape'=>false, 'class'=>'link'),
					"Confirmar exclusão do cardápio". $menu['Menu']['type'] . "?");
			?>
			</td>
		</tr>

		<?php } ?>
	</table>
	
</div>
