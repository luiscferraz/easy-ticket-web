<?php
Class Item extends AppModel{
	public $name='Item';
		public $hasAndBelongsToMany = array('Menu' => array('className'=>'Menu', 'joinTable'=>'items_menus',
		'foreignKey'=>'item_id', 'associationForeignKey'=>'menu_id',));

}
?>