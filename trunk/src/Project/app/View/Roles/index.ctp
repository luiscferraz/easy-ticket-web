<div id="cargoindex">
	

<table class="tabela-vazia" cellpadding="0" cellspacing="0">
		<tr>
			<th>Nome</th>
			<th>Ações</th>
		</tr>

		<?php
			
			$i = 0;
			foreach ($roles as $role) 
			{
				$class = null;
				
				if($i++ % 2 == 0)
				{
					$class = 'class="altrow"';
				}
				
			 foreach ($roles as $role) { 
			    	
			           
							
		?>

		<tr <?php echo $class; ?>>
			<td class="nome"><?php echo $role['Role']['name']; ?></td>
			<td class="actions">

					<?php 
					echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
					array('action' => 'edit', $role['Role']['id']),
					array('escape'=>false, 'class'=>'link'));
					?>

					<?php
					echo $this->Html->link($this->Html->image("delete.png",array('alt' => 'Remover')),
					array('action' => 'delete', $role['Role']['id']),
					array('escape'=>false, 'class'=>'link'),
					"Confirmar exclusão do aluno ". $role['Role']['name'] . "?");
				}
			 
					?>

			</td>
		</tr>
		<?php } ?>
	</table>
	
</div>