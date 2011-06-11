<div class="regions form">
<?php echo $this->Form->create('Region');?>
	<fieldset>
 		<legend><?php __('Add Region'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('other_names');
		echo $this->Form->input('isvalidate');
		echo $this->Form->input('country_id');
		echo $this->Form->input('citiesopen');
		echo $this->Form->input('selectable');
		echo $this->Form->input('hcworld_created');
		echo $this->Form->input('main_city_id');
		echo $this->Form->input('nbmembers');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Regions', true), array('action' => 'index'));?></li>
	</ul>
</div>