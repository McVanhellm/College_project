<?php 

	// 
	//    Хранилище маршрутов для сайта
	//

	return [

		'' => [
			'controller' => 'StartPage',
			'action' => 'Index',
		],	

		'index' => [
			'controller' => 'StartPage',
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

			'account/profile' => [
			'controller' => 'Account',
			'action' => 'Profile',
		],

			'account/home' => [
			'controller' => 'Account',
			'action' => 'Home',
		],

	];

?>