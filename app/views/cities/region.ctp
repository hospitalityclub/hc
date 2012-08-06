<div class="grid_16">
    <h2 id="page-heading">Hospitality Club &gt; Countries > CName > Regions<span style="float: right;">Development Version 0.1</h2>
</div>
<div class="clear"></div>
<div class="grid_4">
    <?php echo $this->element('menu'); ?>
    <?php echo $this->element('list'); ?>
</div>
<div class="grid_7">
    <table>
      <?php foreach (array_chunk($cities, 3) as $group): ?>
      <tr>
        <?php foreach ($group as $city): ?>
        <td><a href="<?php echo '/hc3/members/city/'. $city['City']['id']; ?>"><?php echo $city['City']['name'] ?></a></td>
        <?php endforeach; ?>
      </tr>
      <?php endforeach; ?>
    </table>
</div>
<div class="grid_5">
    <!-- Login / Register box -->
    <?php echo $this->element('login_register'); ?>
    <!-- Search box-->
    <?php echo $this->element('search'); ?>
</div>
