<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
 		<legend><?php __('Add Member'); ?></legend>
	<?php
		echo $this->Form->input('country_id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('region');
		echo $this->Form->input('zip');
		echo $this->Form->input('gender');
		echo $this->Form->input('username');
		echo $this->Form->input('city_volunteer');
		echo $this->Form->input('region_volunteer');
		echo $this->Form->input('country_volunteer');
		echo $this->Form->input('bday');
		echo $this->Form->input('homepage');
		echo $this->Form->input('photo');
		echo $this->Form->input('homephone');
		echo $this->Form->input('workphone');
		echo $this->Form->input('mobilephone');
		echo $this->Form->input('fax');
		echo $this->Form->input('occupation');
		echo $this->Form->input('updates');
		echo $this->Form->input('secstreet');
		echo $this->Form->input('seccity');
		echo $this->Form->input('secregion');
		echo $this->Form->input('seczip');
		echo $this->Form->input('seccountry');
		echo $this->Form->input('secphone');
		echo $this->Form->input('secinfo');
		echo $this->Form->input('languages');
		echo $this->Form->input('hobbies');
		echo $this->Form->input('organizations');
		echo $this->Form->input('travels');
		echo $this->Form->input('plans');
		echo $this->Form->input('aboutmyself');
		echo $this->Form->input('accom');
		echo $this->Form->input('offershow');
		echo $this->Form->input('offerdinner');
		echo $this->Form->input('offerother');
		echo $this->Form->input('besttimes');
		echo $this->Form->input('publictrans');
		echo $this->Form->input('bigcities');
		echo $this->Form->input('attractions');
		echo $this->Form->input('withgbfriend');
		echo $this->Form->input('withgrandpa');
		echo $this->Form->input('withpar');
		echo $this->Form->input('withsibs');
		echo $this->Form->input('withop');
		echo $this->Form->input('withalone');
		echo $this->Form->input('garden');
		echo $this->Form->input('spacefloor');
		echo $this->Form->input('matress');
		echo $this->Form->input('sofa');
		echo $this->Form->input('bed');
		echo $this->Form->input('ownroom');
		echo $this->Form->input('sleepother');
		echo $this->Form->input('bringtent');
		echo $this->Form->input('bringmat');
		echo $this->Form->input('bringsleep');
		echo $this->Form->input('numberguest');
		echo $this->Form->input('staylength');
		echo $this->Form->input('notifyshould');
		echo $this->Form->input('notifymust');
		echo $this->Form->input('callarrival');
		echo $this->Form->input('callbetween1');
		echo $this->Form->input('callbetween2');
		echo $this->Form->input('guestgender');
		echo $this->Form->input('smoking');
		echo $this->Form->input('nodrugs');
		echo $this->Form->input('noalc');
		echo $this->Form->input('payphone');
		echo $this->Form->input('payfood');
		echo $this->Form->input('dodishes');
		echo $this->Form->input('restriother');
		echo $this->Form->input('pets');
		echo $this->Form->input('othcom');
		echo $this->Form->input('feedback');
		echo $this->Form->input('terms');
		echo $this->Form->input('category');
		echo $this->Form->input('status');
		echo $this->Form->input('flags');
		echo $this->Form->input('level');
		echo $this->Form->input('hcnotes');
		echo $this->Form->input('name');
		echo $this->Form->input('street');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('secemail');
		echo $this->Form->input('namehide');
		echo $this->Form->input('streethide');
		echo $this->Form->input('lastlogin');
		echo $this->Form->input('ip');
		echo $this->Form->input('vol_teaser');
		echo $this->Form->input('vol_contact_info');
		echo $this->Form->input('vol_why');
		echo $this->Form->input('vol_what');
		echo $this->Form->input('vol_additional');
		echo $this->Form->input('emailerror');
		echo $this->Form->input('lastaccess');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
		echo $this->Form->input('chat_msn');
		echo $this->Form->input('chat_icq');
		echo $this->Form->input('chat_yahoo');
		echo $this->Form->input('chat_skype');
		echo $this->Form->input('chat_others');
		echo $this->Form->input('chat_aol');
		echo $this->Form->input('nbhost');
		echo $this->Form->input('nbguest');
		echo $this->Form->input('nbcomment');
		echo $this->Form->input('visincity');
		echo $this->Form->input('visinlocation');
		echo $this->Form->input('nbtrust');
		echo $this->Form->input('idcity');
		echo $this->Form->input('nbpspcheck');
		echo $this->Form->input('lang_signup');
		echo $this->Form->input('lang_last');
		echo $this->Form->input('nbvisit');
		echo $this->Form->input('nbvisittoday');
		echo $this->Form->input('myvisitidlist');
		echo $this->Form->input('nbofremindreceivedsincelastlog');
		echo $this->Form->input('nbofemailreceivedsincelastlog');
		echo $this->Form->input('toberemind');
		echo $this->Form->input('attractions_updated');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Members', true), array('action' => 'index'));?></li>
	</ul>
</div>