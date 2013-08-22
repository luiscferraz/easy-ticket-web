<h1><img id="miniLogo" src="/img/miniLogo.png" /> Cadastrar Refeição</h1>

<?php
	echo $this->Form->create('Meal', array('action' => 'add'));

	echo $this->Form->input('Meal.type', array('label' => 'Tipo: ','required'=>'required', 'id'=>'tipo'));
	echo $this->Form->input('Meal.price', array('label' => 'Preço: ','required'=>'required', 'id'=>'preco'));
	echo $this->Form->end('CADASTRAR REFEIÇÃO');
?>