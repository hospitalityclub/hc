<?php
class CitiesController extends AppController {

	var $name = 'Cities';

  // fetches all cities for a given region_id
  function region($id = null) {

   $cities = $this->City->find('all', array(
      'conditions' => array('City.region_id' => $id)
    ));
    $this->set('data', $cities);
  }

}
?>
