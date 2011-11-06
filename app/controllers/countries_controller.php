<?php
class CountriesController extends AppController {

  var $name = 'Countries';
  var $components = array('Auth', 'Session');
  var $paginate = array(
      'limit' => 2000, // amonaco: not sure if using pagination at all
      'order' => array(
          'Country.ID' => 'asc'
      )
  );

  function index() {
    $countries = $this->paginate('Country');
    $this->set('countries', $countries); 
  }
}
?>
