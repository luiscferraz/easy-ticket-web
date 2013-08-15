<!-- Arquivo: /app/views/posts/add.ctp -->

<h1>Cadastrar Curso</h1>

<?php
	echo $this->Form->create('Curso', array('action' => 'add'));
	echo $this->Form->input('Curso.nome', array('label' => 'Nome: ','required'=>'required', 'id'=>'nome'));
	echo $this->Form->end('CADASTRAR CURSO');
?>