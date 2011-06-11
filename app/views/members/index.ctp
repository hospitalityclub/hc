<div class="members index">
	<h2><?php __('Members');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('country_id');?></th>
			<th><?php echo $this->Paginator->sort('city_id');?></th>
			<th><?php echo $this->Paginator->sort('region');?></th>
			<th><?php echo $this->Paginator->sort('zip');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('city_volunteer');?></th>
			<th><?php echo $this->Paginator->sort('region_volunteer');?></th>
			<th><?php echo $this->Paginator->sort('country_volunteer');?></th>
			<th><?php echo $this->Paginator->sort('bday');?></th>
			<th><?php echo $this->Paginator->sort('homepage');?></th>
			<th><?php echo $this->Paginator->sort('photo');?></th>
			<th><?php echo $this->Paginator->sort('homephone');?></th>
			<th><?php echo $this->Paginator->sort('workphone');?></th>
			<th><?php echo $this->Paginator->sort('mobilephone');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th><?php echo $this->Paginator->sort('occupation');?></th>
			<th><?php echo $this->Paginator->sort('updates');?></th>
			<th><?php echo $this->Paginator->sort('secstreet');?></th>
			<th><?php echo $this->Paginator->sort('seccity');?></th>
			<th><?php echo $this->Paginator->sort('secregion');?></th>
			<th><?php echo $this->Paginator->sort('seczip');?></th>
			<th><?php echo $this->Paginator->sort('seccountry');?></th>
			<th><?php echo $this->Paginator->sort('secphone');?></th>
			<th><?php echo $this->Paginator->sort('secinfo');?></th>
			<th><?php echo $this->Paginator->sort('languages');?></th>
			<th><?php echo $this->Paginator->sort('hobbies');?></th>
			<th><?php echo $this->Paginator->sort('organizations');?></th>
			<th><?php echo $this->Paginator->sort('travels');?></th>
			<th><?php echo $this->Paginator->sort('plans');?></th>
			<th><?php echo $this->Paginator->sort('aboutmyself');?></th>
			<th><?php echo $this->Paginator->sort('accom');?></th>
			<th><?php echo $this->Paginator->sort('offershow');?></th>
			<th><?php echo $this->Paginator->sort('offerdinner');?></th>
			<th><?php echo $this->Paginator->sort('offerother');?></th>
			<th><?php echo $this->Paginator->sort('besttimes');?></th>
			<th><?php echo $this->Paginator->sort('publictrans');?></th>
			<th><?php echo $this->Paginator->sort('bigcities');?></th>
			<th><?php echo $this->Paginator->sort('attractions');?></th>
			<th><?php echo $this->Paginator->sort('withgbfriend');?></th>
			<th><?php echo $this->Paginator->sort('withgrandpa');?></th>
			<th><?php echo $this->Paginator->sort('withpar');?></th>
			<th><?php echo $this->Paginator->sort('withsibs');?></th>
			<th><?php echo $this->Paginator->sort('withop');?></th>
			<th><?php echo $this->Paginator->sort('withalone');?></th>
			<th><?php echo $this->Paginator->sort('garden');?></th>
			<th><?php echo $this->Paginator->sort('spacefloor');?></th>
			<th><?php echo $this->Paginator->sort('matress');?></th>
			<th><?php echo $this->Paginator->sort('sofa');?></th>
			<th><?php echo $this->Paginator->sort('bed');?></th>
			<th><?php echo $this->Paginator->sort('ownroom');?></th>
			<th><?php echo $this->Paginator->sort('sleepother');?></th>
			<th><?php echo $this->Paginator->sort('bringtent');?></th>
			<th><?php echo $this->Paginator->sort('bringmat');?></th>
			<th><?php echo $this->Paginator->sort('bringsleep');?></th>
			<th><?php echo $this->Paginator->sort('numberguest');?></th>
			<th><?php echo $this->Paginator->sort('staylength');?></th>
			<th><?php echo $this->Paginator->sort('notifyshould');?></th>
			<th><?php echo $this->Paginator->sort('notifymust');?></th>
			<th><?php echo $this->Paginator->sort('callarrival');?></th>
			<th><?php echo $this->Paginator->sort('callbetween1');?></th>
			<th><?php echo $this->Paginator->sort('callbetween2');?></th>
			<th><?php echo $this->Paginator->sort('guestgender');?></th>
			<th><?php echo $this->Paginator->sort('smoking');?></th>
			<th><?php echo $this->Paginator->sort('nodrugs');?></th>
			<th><?php echo $this->Paginator->sort('noalc');?></th>
			<th><?php echo $this->Paginator->sort('payphone');?></th>
			<th><?php echo $this->Paginator->sort('payfood');?></th>
			<th><?php echo $this->Paginator->sort('dodishes');?></th>
			<th><?php echo $this->Paginator->sort('restriother');?></th>
			<th><?php echo $this->Paginator->sort('pets');?></th>
			<th><?php echo $this->Paginator->sort('othcom');?></th>
			<th><?php echo $this->Paginator->sort('feedback');?></th>
			<th><?php echo $this->Paginator->sort('terms');?></th>
			<th><?php echo $this->Paginator->sort('category');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('flags');?></th>
			<th><?php echo $this->Paginator->sort('level');?></th>
			<th><?php echo $this->Paginator->sort('hcnotes');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('street');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('secemail');?></th>
			<th><?php echo $this->Paginator->sort('namehide');?></th>
			<th><?php echo $this->Paginator->sort('streethide');?></th>
			<th><?php echo $this->Paginator->sort('lastlogin');?></th>
			<th><?php echo $this->Paginator->sort('ip');?></th>
			<th><?php echo $this->Paginator->sort('vol_teaser');?></th>
			<th><?php echo $this->Paginator->sort('vol_contact_info');?></th>
			<th><?php echo $this->Paginator->sort('vol_why');?></th>
			<th><?php echo $this->Paginator->sort('vol_what');?></th>
			<th><?php echo $this->Paginator->sort('vol_additional');?></th>
			<th><?php echo $this->Paginator->sort('emailerror');?></th>
			<th><?php echo $this->Paginator->sort('lastaccess');?></th>
			<th><?php echo $this->Paginator->sort('latitude');?></th>
			<th><?php echo $this->Paginator->sort('longitude');?></th>
			<th><?php echo $this->Paginator->sort('chat_msn');?></th>
			<th><?php echo $this->Paginator->sort('chat_icq');?></th>
			<th><?php echo $this->Paginator->sort('chat_yahoo');?></th>
			<th><?php echo $this->Paginator->sort('chat_skype');?></th>
			<th><?php echo $this->Paginator->sort('chat_others');?></th>
			<th><?php echo $this->Paginator->sort('chat_aol');?></th>
			<th><?php echo $this->Paginator->sort('nbhost');?></th>
			<th><?php echo $this->Paginator->sort('nbguest');?></th>
			<th><?php echo $this->Paginator->sort('nbcomment');?></th>
			<th><?php echo $this->Paginator->sort('visincity');?></th>
			<th><?php echo $this->Paginator->sort('visinlocation');?></th>
			<th><?php echo $this->Paginator->sort('nbtrust');?></th>
			<th><?php echo $this->Paginator->sort('idcity');?></th>
			<th><?php echo $this->Paginator->sort('nbpspcheck');?></th>
			<th><?php echo $this->Paginator->sort('lang_signup');?></th>
			<th><?php echo $this->Paginator->sort('lang_last');?></th>
			<th><?php echo $this->Paginator->sort('nbvisit');?></th>
			<th><?php echo $this->Paginator->sort('nbvisittoday');?></th>
			<th><?php echo $this->Paginator->sort('myvisitidlist');?></th>
			<th><?php echo $this->Paginator->sort('nbofremindreceivedsincelastlog');?></th>
			<th><?php echo $this->Paginator->sort('nbofemailreceivedsincelastlog');?></th>
			<th><?php echo $this->Paginator->sort('toberemind');?></th>
			<th><?php echo $this->Paginator->sort('attractions_updated');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($members as $member):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $member['Member']['id']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['country_id']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['city_id']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['region']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['zip']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['gender']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['username']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['city_volunteer']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['region_volunteer']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['country_volunteer']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['bday']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['homepage']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['photo']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['homephone']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['workphone']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['mobilephone']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['fax']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['occupation']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['updates']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['secstreet']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['seccity']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['secregion']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['seczip']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['seccountry']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['secphone']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['secinfo']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['languages']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['hobbies']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['organizations']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['travels']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['plans']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['aboutmyself']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['accom']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['offershow']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['offerdinner']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['offerother']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['besttimes']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['publictrans']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['bigcities']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['attractions']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['withgbfriend']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['withgrandpa']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['withpar']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['withsibs']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['withop']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['withalone']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['garden']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['spacefloor']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['matress']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['sofa']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['bed']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['ownroom']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['sleepother']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['bringtent']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['bringmat']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['bringsleep']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['numberguest']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['staylength']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['notifyshould']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['notifymust']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['callarrival']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['callbetween1']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['callbetween2']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['guestgender']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['smoking']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['nodrugs']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['noalc']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['payphone']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['payfood']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['dodishes']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['restriother']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['pets']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['othcom']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['feedback']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['terms']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['category']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['status']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['flags']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['level']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['hcnotes']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['name']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['street']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['email']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['password']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['secemail']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['namehide']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['streethide']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['lastlogin']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['ip']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['vol_teaser']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['vol_contact_info']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['vol_why']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['vol_what']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['vol_additional']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['emailerror']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['lastaccess']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['latitude']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['longitude']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['chat_msn']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['chat_icq']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['chat_yahoo']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['chat_skype']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['chat_others']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['chat_aol']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['nbhost']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['nbguest']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['nbcomment']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['visincity']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['visinlocation']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['nbtrust']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['idcity']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['nbpspcheck']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['lang_signup']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['lang_last']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['nbvisit']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['nbvisittoday']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['myvisitidlist']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['nbofremindreceivedsincelastlog']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['nbofemailreceivedsincelastlog']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['toberemind']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['attractions_updated']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['created']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $member['Member']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $member['Member']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Member', true), array('action' => 'add')); ?></li>
	</ul>
</div>