<div class="grid_16">
  <?php echo $this->element('nav'); ?>
  </div>

    <div class="grid_3">
      <?php echo $this->element('side1'); ?>
  </div>
<div class="grid_10">
  <h2> Menu &gt; Countries > CName > Regions > City > Member</h2>
  <table>
    <tr>
      <td><?php echo $this->Paginator->numbers(); ?> </td>
      <td><?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
          <?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?></td>
    </tr>
    <tr>
      <td colspan="2">
        <?php
          echo $this->Paginator->counter(array(
            'format' => 'Page %page% of %pages%, showing %current% records out of
              %count% total, starting on record %start%, ending on %end%'
          ));
        ?>
      </td>
    </tr>
  </table>
  <table>
    <?php foreach (array_chunk($data, 2) as $group): ?>
    <tr>
      <?php foreach ($group as $member): ?>
      <td><a href="<?php echo '/hc3/members/display/'. $member['Member']['id']; ?>"><?php echo $member['Member']['username'] ?></a></td>
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
