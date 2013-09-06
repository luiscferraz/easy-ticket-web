<!DOCTYPE html>

<html>
    
    <head>
		<title><?php echo $title_for_layout; ?></title>
		
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<?php echo $this->Html->css('style'); ?>
    </head>

    <body>

		<div class="conteudo">
			<a href= /../ ><img id="miniLogo" src="/img/miniLogo.png" border="0"></a>
			<h1><?php echo $title_for_layout; ?></h1>	        
			<?php echo $this->fetch('content'); ?>
	    </div>

    </body>

</html>