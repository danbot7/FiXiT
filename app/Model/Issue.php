<?php
class Issue extends AppModel{
	public $hasMany = array(
		'JobTag' => array(
			'className' => 'Job',
			//'conditions' => array('JobTag.issue_id' => id),
			'dependent' => false
			)
		);	
}