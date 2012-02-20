<?php

class Author extends AppModel {

	var $hasMany = array('Post');

	var $brwConfig = array(
		'fields' => array(
			'filter' => array('email', 'id_number' => true),
		),
	);

}