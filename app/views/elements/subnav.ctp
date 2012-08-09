<header id="overview" class="jumbotron subhead">
    <h1><?php echo $title; ?></h1>  
    <p class="lead"><?php echo $lead; ?> <span style="float: right;">Development Version 0.1</span></p>
</header>
<div class="subnav">
    <ul class="nav nav-pills">
    <li class="<?php if ($this->here == '/hc3/start/') { echo 'active'; } ?>"><a href="/hc3/start/">Dashboard</a></li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Profile <b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li class="<?php if ($this->here == '/hc3/members/') { echo 'active'; } ?>"><a href="/hc3/members/">Edit Profile</a></li>
          <li><a href="#buttonDropdowns">View Profile</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Search <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#navs">Countries</a></li>
          <li><a href="#navbar">Cities</a></li>
          <li><a href="#pagination">People</a></li>
          <li><a href="#pagination">Advanced</a></li>
        </ul>
      </li>
      <li class="<?php if ($this->here == '/hc3/messages/') { echo 'active'; } ?>"><a href="/hc3/messages/">Inbox <span class="badge badge-warning">2</span></a></li>
      <li><a href="#typography">Forums</a></li>
      <li><a href="#thumbnails">Groups</a></li>
      <li><a href="#thumbnails">Settings</a></li>
    </ul>
</div>
<?php echo $this->element('info'); ?>


