<?php echo
    $this->element('subnav',
        array(
            'title' => 'Message Inbox',
            'lead' => 'This is where, chatting, reading and writing messages takes place.'
        )
    );
?>
<div class="row">
    <div class="span4">
    <h2>News and Bits</h2>
    <p>
    27.07. Thanks to all of you who signed up for our partnership with Airbnb already - you can still do so until tomorrow at airbnb.com/partners/hospitality-club. Great to see all your faces on there! Also, thanks for all the feedback you sent! We extended the FAQ section on airbnb.hospitalityclub.org quite a bit to answer all your questions. Most importantly: no, of course HC is not changing - it will always stay free and non-profit. We're simply doing a little experiment with this partnership to see if we can raise some funds for our servers without directly asking you for money. That's all :-) </p>

    <p> 11.07. HC's 12th birthday :-) </p>
    </div>
    <div class="span4"><h2>Welcome Ariel!</h2>
    <p>Hello and welcome back at the member area of the Hospitality Club! Have fun meeting other members, and check out the <a href="forum.php">Forum</a> and the <a href="chat.php">Chat</a>. Please spread the word about the club as much as you can, write <a href="commentslatest.php">comments</a> about any other member you personally know and fill the <a href="travelguidehelp.php">Travel Guide</a> sections with lots of useful info. To <b>receive your messages faster</b>, select no for the spam check in your <a href="preferences.php">Preferences</a>. Thank you :-)</p>
    </div>
    <div class="span4"><h2>Tips:</h2>
    <p> #8 To receive more answers to your messages and more guests, you should fill your profile with lots of info about yourself. </p>
    </div>
</div>




<div class="messages index">
	<h2><?php __('Messages');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('from_member');?></th>
			<th><?php echo $this->Paginator->sort('to_member');?></th>
			<th><?php echo $this->Paginator->sort('message');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($messages as $message):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $message['Message']['id']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['from_member']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($message['Member']['name'], array('controller' => 'members', 'action' => 'view', $message['Member']['id'])); ?>
		</td>
		<td><?php echo $message['Message']['message']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['status']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $message['Message']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $message['Message']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $message['Message']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $message['Message']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Message', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
