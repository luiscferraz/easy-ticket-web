<?php
Class Menu extends AppModel{
	public $name='Menu';
	public $hasAndBelongsToMany = array('Item' => array('className'=>'Item', 'joinTable'=>'items_menus',
		'foreignKey'=>'menu_id', 'associationForeignKey'=>'item_id',));


}
?>