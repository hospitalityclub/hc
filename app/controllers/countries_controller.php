<?php
class CountriesController extends AppController {

  var $name = 'Countries';
  var $components = array('Auth', 'Session');

  var $paginate = array(
      'limit' => 2000,
      'order' => array(
          'Country.ID' => 'asc'
      )
  );

  function index() {
    // $this->set('countries', $this->Country->find('all'));
    $data = $this->paginate('Country');
    $this->set('countries', $data); 
  }

  function show($id = null)  {
    if (!$id) {
      $this->Session->setFlash(__('Invalid Country', true));
      $this->redirect(array('action' => 'index'));
    }
    else {
      $this->Country->recursive = 2;
      $countries = $this->Country->find('first', array('conditions' => array('Country.id' => $id)));
      $this->set('country', $countries); // FIXME
    }
  }
}
?>
