<?php

return array(

	'table'     		=>  'admins',

	'eloquent'  		=>  'Admin',

	'data-perpage'  	=>  10,

	'title'   		=>  array(
		'index'         =>  'All Data (%s)',
		'create'        =>  'Add New',
		'edit'          =>  'Edit Data',
		'show'          =>  'Show Data',
		'search'        =>  'Search Result : "%s"'
	),

	'search'  		=> 	'id',

	'fields'  		=> 	array(
		'show'		=>	'*',
		'format'	=>	array(
			//
			// example
			//
			// 	'fullname'	=>	'Fullname',
			// 	'user_id'	=>	['Username', function($value)
			// 	{
			// 		return User::find($value)->username;
			// 	}],

		)
	),

	'validation'	=>	array(
		'create'	=>	array(
			'rules'		=>	array(),
			'messages'	=>	array(),
			'format'	=>	array(),
		),
		'update'	=>	array(
			'rules'		=>	array(),
			'messages'	=>	array(),
			'format'	=>	array()
		)
	),

	'form'    		=>  array(
		'create'	=>	array(
			
			//
			// 	example
			//
			//	'username'	=>	array(
			//		'title'	=>	'Username',
			//		'field'	=>	array(
			//			'type'			=>	'text',
			//			'value'			=>	null,
			//			'attributes'	=>	array(
			//				'class'	=>	'form-control'
			//			)
			//		)
			//	)
		),
		'update'	=>	'auto'
	),
);
