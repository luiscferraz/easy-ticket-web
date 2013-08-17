<h1><img id="miniLogo" src="/img/miniLogo.png" /> Cadastrar Curso</h1>

<?php
	echo $this->Form->create('Course', array('action' => 'add'));

	echo $this->Form->input('Course.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'nome'));
	echo $this->Form->end('CADASTRAR CURSO');
?>