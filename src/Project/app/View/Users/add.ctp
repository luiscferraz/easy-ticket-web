<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('type', array(
            'options' => array('adm' => 'Funcionário', 'cons' => 'Estudante')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>