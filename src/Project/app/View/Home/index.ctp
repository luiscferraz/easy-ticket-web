<title>Inicial</title>

<div id="Menu_Home">
		<ul>
			<li><?php echo $this->Html->link('Alunos', array('action' =>'../students'));?></li>
			<li><?php echo $this->Html->link('Funcionários', array('action' =>'../employees'));?></li>
			<li><?php echo $this->Html->link('Cursos', array('action' =>'../courses'));?></li>
			<li><?php echo $this->Html->link('Cargos', array('action' =>'../roles'));?></li>
			<li><?php echo $this->Html->link('Cartões', array('action' =>'../tickets'));?></li>
			<li><?php echo $this->Html->link('Recargas', array('action' =>'../recharges'));?></li>
		</ul>
</div>

<div id="Menu_Home2">
		<ul>
			<li><?php echo $this->Html->link('Cardápios', array('action' =>'../menus'));?></li>
			<li><?php echo $this->Html->link('Itens', array('action' =>'../items'));?></li>
			<li><?php echo $this->Html->link('Refeições', array('action' =>'../meals'));?></li>
		</ul>
</div>
