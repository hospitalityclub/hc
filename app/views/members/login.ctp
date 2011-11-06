<?php
echo $session->flash('auth');
echo $this->Form->create('Member', array('action' => 'login'));
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('Login');
?>

Create new user:

<?php
echo $form->create('Member', array('action' => 'register'));
echo $form->input('username');
echo $form->input('password');
echo $form->input('password_confirm', array('type' => 'password'));
echo $form->submit();
echo $form->end(); 
?>



