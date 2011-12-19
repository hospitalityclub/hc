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

    $country_list = array_shift($country);
    $this->set('country', $country_list);
    $this->set('regions_count', count($country_list['Region']));
  }
}
?>
