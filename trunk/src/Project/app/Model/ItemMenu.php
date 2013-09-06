 <?php

  class ItemMenu extends AppModel{
 	public $name = 'ItemMenu';
 	var $useTable = 'items_menus';
	var $belongsTo = array('Item', 'Menu');
 }

?>
