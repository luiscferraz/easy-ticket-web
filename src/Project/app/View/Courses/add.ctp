<!-- Arquivo: /app/views/posts/add.ctp -->

<h1>Cadastrar Curso</h1>

<?php
	echo $this->Form->create('Course', array('action' => 'add'));
	echo $this->Form->input('Course.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'nome'));
	echo $this->Form->end('CADASTRAR CURSO');
?>