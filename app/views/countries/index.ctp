<div class="grid_16">
    <h2 id="page-heading">Hospitality Club > Countries<span style="float: right;">Development Version 0.1</h2>
</div>
<div class="clear"></div>
<div class="grid_4">
    <?php echo $this->element('menu'); ?>
    <?php echo $this->element('list'); ?>
</div>
<div class="grid_7">
    <table>
      <?php foreach (array_chunk($countries, 2) as $group): ?>
      <tr>
        <?php foreach ($group as $country): ?>
        <td><a href="<?php echo '/hc3/regions/country/'. $country['Country']['id']; ?>"><?php echo $country['Country']['name'] ?></a></td>
        <td><?php echo $country['Country']['members'] ?> </td>
        <?php endforeach; ?>
      </tr>
      <?php endforeach; ?>
    </table>

    <?php // echo $this->element('countries'); ?>
    <?php // echo $this->element('profile'); ?>
</div>
<div class="grid_5">
    <!-- Login / Register box -->
    <?php echo $this->element('login_register'); ?>
    <!-- Search box-->
    <?php echo $this->element('search'); ?>
</div>
