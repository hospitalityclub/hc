<div id="box">
  <h1>Already a Member?</h1>
  <?php
  echo $form->create('Member', array('action' => 'login'));
  echo $form->input('username', array('label' => 'Username:', 'between' => '<br />'));
  echo $form->input('password',  array('label' => 'Password:', 'between' => '<br />'));
  ?>
  <div id="remember"><?php echo $form->input('remember', array(
    'type' => 'checkbox',
    'label' => __('Keep me logged in on this computer for 2 weeks.', true))); ?></div>
  <?php

  // Auth error message
  if ($session->check('Message.auth')) {
    $session->flash('auth');
  }

  echo $form->submit('Log in');
  echo $form->end();
  ?>
</div>
