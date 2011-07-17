<div id="test"> hello </div>
<?
$this->Js->get('#test');
$this->Js->event('click', $this->Js->alert('hey you!'));
?>

<div class="grid_16">
  <?php echo $this->element('nav'); ?>
</div>

<div class="grid_3">
  <?php echo $this->element('side1'); ?>
</div>
<div class="grid_10">
<h4> Menu
  &gt; <?php echo $member['Country']['name'] ?>
  &gt; <?php echo $member['Member']['region']; ?>
  &gt; <?php echo $member['City']['name']; ?>
  &gt; <?php echo $member['Member']['username']; ?>
</h4>
<h5>Profile</h5>
<div style="float: left; width: 65%">
<table>
  <tr>
    <td>Name:</td>
    <td><?php echo $member['Member']['name']; ?></td>
  </tr><tr>
    <td>Street:</td>
    <td><?php echo $member['Member']['street']; ?></td>
  </tr><tr>
    <td>City:</td>
    <td><?php echo $member['City']['name']; ?></td>
  </tr><tr>
    <td>Region:</td>
    <td><?php echo $member['Member']['region']; ?></td>
  </tr><tr>
    <td>Country:</td>
    <td><?php echo $member['Country']['name']; ?></td>
  </tr><tr>
    <td>Homepage:</td>
    <td><?php echo $member['Member']['homepage']; ?></td>
  </tr><tr>
    <!-- gets too complex, take this to an element -->
    <td>Phone:</td>
    <td><?php echo $member['Member']['homephone']; ?> (home) <?php echo $member['Member']['workphone']; ?> (work)</td>
  </tr><tr>
</table>

<?php echo $this->Form->create(); ?> <!-- Form elements go here --> 
<?php echo $this->Form->input('username'); ?>
<?php echo $this->Js->submit('Add', array('update' => '#notification', 'class'=>'testclass', 'url'=>'/hc3/members/test'));  ?>
<?php echo $this->Form->end(); ?>




