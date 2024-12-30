<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['save_tmpl_files'] = 'y';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system-configuration-overrides.html

$config['app_version'] = '7.5.5';
$config['encryption_key'] = '5b317e371d80faa5fd381a5a1f3dddc524d2ace7';
$config['session_crypt_key'] = '6fec609a85e8711e97dc75a6ff052e6efe8b42d9';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'localhost',
		'database' => 'db-tester',
		'username' => 'root',
		'password' => '',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);
$config['show_ee_news'] = 'n';

// EOF