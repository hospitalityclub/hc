    <div class="container">
        <div style="text-align: center">
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
            <h1>Welcome to HC!</h1>
            <p>Do you love meeting people from other cultures? Do you love traveling? Do you love helping other people? Then this is the place for you to be! Joining is free, takes just a minute and everyone is welcome.</p> 

            <form class="form-inline" id="MemberLoginForm" method="post" action="/hc3/members/login" accept-charset="utf-8">
                <input type="hidden" name="_method" value="POST" />
                <input type="text" name="data[Member][username]" class="input-medium" placeholder="Username">
                <input type="password" name="data[Member][password]" class="input-medium" placeholder="Password">
                &nbsp;
                <label class="checkbox"> <input type="checkbox" name="data[Member][remember]"> Remember me </label>
                &nbsp;
                <button type="submit" class="btn btn-large btn-success">Sign in!</button>
                &nbsp;
                <button type="submit" class="btn btn-large btn-primary">Register &raquo;</button>
            </form>
            <!-- <button type="submit" class="btn btn-large btn-warning">Help...</button> -->
        </div>
    </div>

      <div class="alert">
        <button class="close" data-dismiss="alert">×</button>
        <strong>Warning!</strong> &nbsp; As for Today 03:30:00pm the server will go down for hardware maintenance. We expect to have the server back and up by  Wed Aug  8 20:59:16 EDT 2012. Thanks!
      </div>
      <!--
      <div class="alert alert-error">
        <button class="close" data-dismiss="alert">×</button>
        <strong>Error!</strong> You need cookies enabled in order to proceed with login!
      </div>
      -->

      <!-- Example row of columns -->
      <div class="row">
        <div class="span3">
          <h2>About HC</h2>
           <p>Our aim is to bring people together - hosts and guests, travelers and locals. Thousands of Hospitality Club members around the world help each other when they are traveling - be it with a roof for the night or a guided tour through town. Joining is free, takes just a minute and everyone is welcome. Members can look at each other's profiles, send messages and post comments about their experience on the website.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span3">
          <h2>Volunteer Support</h2>
           <p>The club is supported by volunteers who believe in one idea: by bringing travelers in touch with people in the place they visit, and by giving "locals" a chance to meet people from other cultures we can increase intercultural understanding and strengthen the peace on our planet.. </p>
          <p><a class="btn" href="#">More...&raquo;</a></p>
       </div>
        <div class="span3">
          <h2>Join Us</h2>
          <p>Come onboard - join the largest online hospitality exchange organization! You will meet friendly people and find free accommodation when you travel to any corner of the world. There are no obligations (you do not have to host anyone at your home!), membership is free and we would love to have you in our world wide web of friendly people! </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span3">
          <h2>Statistics</h2>
          <p>We are 651.123 hospitality exchange with thousands of members in 207 countries the world's largest hospitality exchange network!!! Now we are on a mission to reach 1,000,000 friendly people. Help us and send an email to tell your friends about the club!</p>
          <p><a class="btn" href="#">More...&raquo;</a></p>
        </div>
      </div>








<!--
<div class="container_16">
    <div class="grid_16" style="height: 50px;">
        &nbsp;
    </div> 
    <div class="clear"> </div>

    <div class="grid_4"> &nbsp; </div> 
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
    <div class="grid_1"> &nbsp; </div>
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
    <div class="grid_2"> &nbsp; </div>
</div>
<div class="clear"> </div>
-->
