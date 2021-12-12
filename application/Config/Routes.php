<?php 

	return [

		/*
			Admin Panel
		*/

		'admin/login' => [
			'controller' => 'Admin',
			'action' => 'AdminLogin',
		],

		'admin/panel' => [
			'controller' => 'Admin',
			'action' => 'Panel',
		],

		'admin/pages' => [
			'controller' => 'Admin',
			'action' => 'Pages',
		],

		'admin/setting' => [
			'controller' => 'Admin',
			'action' => 'setting',
		],

		'admin/plugins' => [
			'controller' => 'Admin',
			'action' => 'plugins',
		],
		
		/*
			Forum
		*/

		'forum/lk' => [
			'controller' => 'Forum',
			'action' => 'lk',
		],

		'forum/topic' => [
			'controller' => 'Forum',
			'action' => 'topic',
		],

		'forum' => [
			'controller' => 'Forum',
			'action' => 'main',
		],

		/*
			User site
		*/

		'' => [
			'controller' => 'Index',
			'action' => 'Index',
		],	

		'index' => [
			'controller' => 'Index',
			'action' => 'Index',
		],

		'account/login' => [
			'controller' => 'Account',
			'action' => 'Login',
		],

		'account/register' => [
			'controller' => 'Account',
			'action' => 'Register',
		],

		'account/home' => [
			'controller' => 'Account',
			'action' => 'Home',
		],
	];

?>