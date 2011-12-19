<div class="grid_3">
  <?php echo $this->element('side1'); ?>
</div>
<div class="grid_10">
  <h2> Menu &gt; Countries &gt; <?php echo $country['Country']['name'] ?> </h2>

  <table>
    <?php foreach (array_chunk($country['Region'], 3) as $group): ?>
    <tr>
      <?php foreach ($group as $region): ?>
      <td><a href="<?php echo '/hc3/countries/show/'. $region['id']; ?>"><?php echo $region['name'] ?></a></td>
      <td><?php // echo $region['nbmembers'] ?> </td>
      <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
  </table>
</div>
