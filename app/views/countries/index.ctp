<pre>
<?php echo $token; ?>
</pre>

<div class="grid_16">
  <?php echo $this->element('nav'); ?>
</div>

<div class="grid_3">
  <?php echo $this->element('side1'); ?>
</div>
<div class="grid_10">

  <h2> Menu &gt; Countries</h2>
<!--
<table>
  <tr>
    <td>
      <?php echo $paginator->numbers(); ?>
    </td>
    <td>
      <?php echo $paginator->prev('« Previous', null, null, array('class' => 'disabled'));?>
      <?php echo $paginator->next(' Next »', null, null, array('class' => 'disabled')) ?>
    </td>
    <td>
      <?php echo $paginator->counter(); ?>
    </td>
  </tr>
</table>
-->

<table>
  <?php foreach (array_chunk($countries, 3) as $group): ?>
  <tr>
    <?php foreach ($group as $country): ?>
    <td><a href="<?php echo '/hc3/countries/show/'. $country['Country']['id']; ?>"><?php echo $country['Country']['name'] ?></a></td>
    <td><?php echo $country['Country']['nbmembers'] ?> </td>
    <?php endforeach; ?>
  </tr>
  <?php endforeach; ?>
</table>
  
</div>
<div class="grid_3">
  <?php echo $this->element('side2'); ?>
</div>


