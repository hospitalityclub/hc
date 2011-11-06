<?php
class RegionsController extends AppController {

	var $name = 'Regions';
  var $uses = array('Region');

  // displays regions for a given country_id
  function country($id = null) {

    $regions = $this->Region->find('all', array(
      'conditions' => array('Region.country_id' => $id)
    ));
    $this->set('data', $regions);

  }
}
?>
