<div class="grid_16">
  <h2> Menu &gt; Countries</h2>
  <?php echo $this->element('nav'); ?>
</div>

<div class="grid_3">
  <?php echo $this->element('side1'); ?>
</div>
<div class="grid_10">

<table>
  <tr>
    <td>
      <!-- Shows the page numbers -->
      <?php echo $paginator->numbers(); ?>
    </td>
    <td>
    <!-- Shows the next and previous links -->
    <?php
      echo $paginator->prev('« Previous', null, null, array('class' => 'disabled')); 
      echo $paginator->next(' Next »', null, null, array('class' => 'disabled'));
    ?> 
    </td>
    <td>
      <!-- prints X of Y, where X is current page and Y is number of pages -->
      <?php echo $paginator->counter(); ?>
    </td>
  </tr>
</table>

<table>
  <?php foreach (array_chunk($countries, 3) as $group): ?>
  <tr>
    <?php foreach ($group as $country): ?>
    <td><a href="<?php echo '/devel/countries/show/'. $country['Country']['id']; ?>"><?php echo $country['Country']['name'] ?></a></td>
    <td><?php echo $country['Country']['nbmembers'] ?> </td>
    <?php endforeach; ?>
  </tr>
  <?php endforeach; ?>
</table>
  
</div>
<div class="grid_3">
  <?php echo $this->element('side2'); ?>
</div>


