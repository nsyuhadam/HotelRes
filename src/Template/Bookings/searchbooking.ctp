<?php
/**
* @var \App\View\AppView $this
*/

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
<li class="heading"><?= __('Actions') ?></li>
<li><?= $this->Html->link(__('Announcement'), ['action' => 'announce']) ?></li> 
<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
</ul>
</nav>
<div class="users form large-9 medium-8 columns content">
<?= $this->Form->create($user) ?>
<fieldset>
<legend><?= __('Search Admin') ?></legend>
<?php
echo $this->Form->control('search', ['label'=>'Please enter booking id']);
?>
</fieldset>

<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>

<?php

 foreach ($user as $users){

	echo $users['bookDate'].""
	   . $users['bookDays'].""
	   . $this-> Html->link(__('Remove Priveleges'),
	 			['action'=> 'unadmin',$users['bookId']])


."<br>";

}

?>
</div>
