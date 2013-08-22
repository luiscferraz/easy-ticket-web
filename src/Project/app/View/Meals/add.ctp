<title>Cadastrar Refeição</title>

<h1><img id="miniLogo" src="/img/miniLogo.png" />  Cadastrar Funcionário</h1>

<?php 
		echo $this->Form->create('Meal', array('action' => 'add')); ?>


		<div class="left">
				
			<fieldset id="dados_aluno1">
				<legend class="legenda">Dados do Funcionário</legend>		

						<?php echo $this->Form->input('Meal.type', array('label' => 'Tipo: ','required'=>'required', 'id'=>'tipo'));
							?> <br>
						<?php echo $this->Form->input('Meal.price', array('label' => 'Preço: ','required'=>'required', 'id'=>'preco'));
							?> <br> 
				
			</fieldset>

			<div id="botaoCadastrar"> 
				<?php echo $this->Form->end('Cadastrar Refeição', array('id'=>'button')); ?> 
			</div>
		
		</div>