<?php
class LocationsController extends AppController {
	public $helpers = array('Html', 'Form');

	 public $paginate = array(
        'limit' => 30,
        'order' => array(
           'Job.id' => 'asc'
           )
        );

	public function index(){
		$this->set('locations',$this->paginate('Location'));
	}
}