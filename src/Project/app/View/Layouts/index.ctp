<!DOCTYPE html>

<html>
    
    <head>
		<title><?php echo $title_for_layout; ?></title>
		
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<?php echo $this->Html->css('style'); ?>
    </head>

    <body>

		<div class="conteudo">
			<img id="miniLogo" src="/img/miniLogo.png" />
			<h1><?php echo $title_for_layout; ?></h1>	        
			<?php echo $this->fetch('content'); ?>
	    </div>
	    
	    <br>
	    <div id="botao-cadastrar">
            <?php echo $this->Html->link("Cadastrar", array('action' => 'add'),array('class'=>'botao')); ?>
        </div>

	   	</div>

    </body>



</html>
