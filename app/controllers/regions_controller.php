<?php
class RegionsController extends AppController {

	var $name = 'Regions';
  var $uses = array('Region', 'Country');

  // displays regions for a given country_id
  function country($id = null) {

    $country = $this->Country->find('all', array(
      'fields' => 'name',
      'conditions' => array('Country.id' => $id)
    ));

    // amonaco: not sure what's going on here
    $this->set('country', array_shift($country));
  }
}
?>
