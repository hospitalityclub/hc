<?php $id = array ('1','2','3','4','5','6','7','8'
,'9','10','11','12','13','14','15','16',
'17','18','19','20','21','22','23','24',
'25','26','27','28','29','30','31','32'); ?>
 
<div class="box">
    <h2>
        <a href="#" id="toggle-search"><?php echo $member['Member']['username']; ?> Trusted By <?php echo count($id); ?> Members</a>
    </h2>
    <div class="block" id="search">
           <?php foreach (array_chunk($id, 8) as $chunk):?>
                <div>
                <?php foreach ($chunk as $item):?>
                    <img src="http://www.gravatar.com/avatar/<?php echo $item; ?>?s=36&d=identicon&r=PG" />
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
    </div>
</div>
<div class="box">
    <h2>
        <a href="#" id="toggle-search"><?php echo $member['Member']['username']; ?> Trusts <?php echo count($id); ?> People</a>
    </h2>
    <div class="block" id="search">
            <?php foreach (array_chunk($id, 8) as $chunk):?>
                <div>
                <?php foreach ($chunk as $item):?>
                    <img src="http://www.gravatar.com/avatar/<?php echo $item; ?>?s=36&d=identicon&r=PG" />
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
    </div>
</div>
