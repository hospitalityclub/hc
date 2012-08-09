<?php echo
    $this->element('subnav',
        array(
            'title' => 'Country Search',
            'lead' => 'Use the search field below to search for accomodation in a particular country.'
        )
    );
?>

<div style="text-align: left">
    <form class="well form-search">
        <input type="text" class="input-big search-query">
        <button type="submit" class="btn btn-primary">Search</button>
        &nbsp;
        <span style="float: right">
            <input class="input-medium" placeholder="Email" type="text">
            <input class="input-medium" placeholder="Password" type="password">
            &nbsp;
            <label class="checkbox"> <input type="checkbox"> Remember me </label>
            &nbsp;
            <button type="submit" class="btn btn-medium btn-success">Sign in!</button>
            &nbsp;
            <button type="submit" class="btn btn-medium btn-primary">Register »</button>
        </span>
    </form>
</div>

<table style="width: 100%">
  <?php foreach (array_chunk($countries, 3) as $group): ?>
  <tr>
    <?php foreach ($group as $country): ?>
    <td><a href="<?php echo '/hc3/regions/country/'. $country['Country']['id']; ?>"><?php echo $country['Country']['name'] ?></a></td>
    <td><?php echo $country['Country']['members'] ?> </td>
    <?php endforeach; ?>
  </tr>
  <?php endforeach; ?>
</table>
