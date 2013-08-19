<?php
/**
* Get a key and secret from AWS and fill in this content.
*/
	$config = array(
		'Aws' => array(
			'url' => getenv('CC_S3_URL'),
			'key' => getenv('CC_S3_ACCESS_KEY'),
			'secret' => getenv('CC_S3_SECRET_KEY')
		)
	);
	Configure::write('Aws', $config);
	$amazon_config_data = Configure::read('Aws');
?>