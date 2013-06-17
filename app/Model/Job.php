<?php
class Job extends AppModel{
	public $belongsTo = array(
		'IssueTag' => array(
			'className'    => 'Issue',
			'dependent'    => false,
			'foreignKey'  => 'issue_id' , 
			'fields' =>'issue_tag' 
			),

		'LocationTag' => array(
			'className'    => 'Location',
			'dependent'    => false,
			'foreignKey'  => 'location_id'  ,
			'fields' =>'location_tag'  
			)
		);
}
