<?php

return array(

	// The default gateway to use
	'default' => 'paypal',

	// Add in each gateway here
	'gateways' => array(
		'paypal' => array(
			'driver' => 'PayPal_Pro',
			'options' => array(
				'solutionType' => '',
				'landingPage' => '',
				'headerImageUrl' => ''
			)
		)
	)
);
