<?php
 class HomeController extends AppController{
        public function index () {
        		$this->set('title_for_layout', 'EasyTicket Web');
               $this->layout =  'base'; 
        }
 }
?>