<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['save_tmpl_files'] = 'y';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '5.3.0';
$config['encryption_key'] = 'fea2866279fea3efa4c25425225e732afae9dcd2';
$config['session_crypt_key'] = 'a8b53f2192aea9439842db6d4b61ade5d76afdd4';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'localhost',
		'database' => 'firstDB',
		'username' => 'tkitch23',
		'password' => 'Useyours23',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);
$config['share_analytics'] = 'y';

// EOF