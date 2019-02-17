<?php 
	return array(
		0 => array(
            '^calculation-s$' => array(
				'controler' => 'Index',
				'action' => 'ServiceCalc',
				'value' => 1,
				'ex'=> 0,
				'control_AC' => array(
					'ADMIN' => true,
					'WORK' => true
				),
				'xss'=> array()
			),
            '^(|calculation|about)$' => array(
				'controler' => 'Index',
				'action' => 'Home',
				'value' => 1,
				'ex'=> 1,
				'control_AC' => array(
					'ADMIN' => true,
					'WORK' => true
				),
				'xss'=> array()
			),            
		),
		1 => array(
			'ADMIN' => '/',
			'WORK' => '/'
		),
	);