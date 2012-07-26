<div class="container_16">
    <div class="grid_16" style="height: 50px;">
        &nbsp;
    </div> 
    <div class="clear"> </div>

    <div class="grid_4"> &nbsp; </div> <!-- used for margin -->
    <div class="grid_4">
        <div id="box">
            <h1>Already a Member?</h1>
            <?php
            echo $form->create('Member', array('action' => 'login'));
            echo $form->input('username', array('label' => 'Username:', 'between' => '<br />'));
            echo $form->input('password',  array('label' => 'Password:', 'between' => '<br />'));
            ?>
            <div id="remember"><?php echo $form->input('remember', array(
                'type' => 'checkbox',
                'label' => __('Remember me for 2 weeks.', true))); ?></div>
            <?php

            // Auth error message
            if ($session->check('Message.auth')) {
                $session->flash('auth');
            }

            echo $form->submit('Log in');
            echo $form->end();
            ?>
        </div>
    </div>
    <div class="grid_1"> &nbsp; </div> <!-- used for margin -->
    <div class="grid_5">
        <div id="box">
        <h1>Register!</h1>
            <?php
            echo $form->create('Member', array('action' => 'register'));
            echo $form->input('username', array('label' => 'Username:', 'between' => '<br />'));
            echo $form->input('email', array('label' => 'E-mail:', 'between' => '<br />'));
            echo $form->input('password',  array('label' => 'Password:', 'between' => '<br />'));
            echo $form->input('password_confirm',  array('label' => 'Confirm password:', 'between' => '<br />'));
            echo $form->submit();
            echo $form->end();
            ?>
        </div>
    </div>
    <div class="grid_2"> &nbsp; </div> <!-- used for margin -->
</div>
<div class="clear"> </div>
