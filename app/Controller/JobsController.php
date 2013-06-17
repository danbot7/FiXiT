<?php
class JobsController extends AppController {
	public $helpers = array('Html', 'Form');

    public $paginate = array(
        'limit' => 30,
        'order' => array(
           'Job.id' => 'asc'
           )
        );

    public function index(){
        $this->set('jobs',$this->paginate('Job'));
    }

    public function view($type = null, $id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid Issue'));
        }

        if (!$type) {
            throw new NotFoundException(__('Invalid Searcg Type'));
        }

        if($type == 'issue'){
            $job = $this->paginate('Job', array('issue_id' => $id));
        }
        else if( $type == 'location'){
            $job = $this->paginate('Job', array('location_id' => $id));
        }
        else{
            $job = null;
        }

        $this->set('jobs', $job);
    }
}