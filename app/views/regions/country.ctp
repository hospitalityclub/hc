<div class="grid_16">
  <?php echo $this->element('nav'); ?>
  </div>

    <div class="grid_3">
      <?php echo $this->element('side1'); ?>
  </div>
<div class="grid_10">

  <h2> Menu &gt; Countries > CName > Regions</h2>

<table>
  <?php foreach (array_chunk($data, 3) as $group): ?>
  <tr>
    <?php foreach ($group as $region): ?>
    <td><a href="<?php echo '/hc3/cities/region/'. $region['Region']['id']; ?>"><?php echo $region['Region']['name'] ?></a></td>
    <?php endforeach; ?>
  </tr>
  <?php endforeach; ?>
</table>

</div>
<div class="grid_3">
  <?php echo $this->element('side2'); ?>
</div>

<?php 
debug($data);
?>
