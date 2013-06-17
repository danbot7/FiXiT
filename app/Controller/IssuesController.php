<?php
class IssuesController extends AppController {
	public $helpers = array('Html', 'Form');

 public $paginate = array(
        'limit' => 30,
        'order' => array(
           'Job.id' => 'asc'
           )
        );

	public function index(){
        $this->set('issues',$this->paginate('Issue'));
	}
}