<?php
class CitiesController extends AppController {

  var $name = 'Cities';
  var $actsAs = array('Containable');

  // fetches all cities for a given region_id
  function region($id = null) {

    // do not perform any joins
    $this->City->recursive = -1;

    // fetch only needed fields
    $cities = $this->City->find('all', array(
      'conditions' => array(
        'City.region_id' => $id
      ),
      'fields' => array(
        'id', 'name', 'nbmembers'
      )
    ));
    // set data for views
    $this->set('cities', $cities);
  }
}
?>
