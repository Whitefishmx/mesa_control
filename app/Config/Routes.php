<?php
	
	namespace CodeIgniter\Commands\Utilities\Routes;
	
	use CodeIgniter\Router\RouteCollection;
	
	/**
	 * @var RouteCollection $routes
	 */
	$routes->setDefaultNamespace ( 'App\Controllers' );
	$routes->setTranslateURIDashes ( FALSE );
	$routes->setDefaultController ( 'Home' );
	$routes->setDefaultMethod ( 'index' );
	$routes->setAutoRoute ( FALSE );
	//====================================||  Rutas  ||====================================
	//====================================|| Webhook ||====================================
	//====================================|| Session ||====================================
	$routes->add ( 'signout', 'SessionController::signOut' /**@uses \App\Controllers\SessionController::signOut * */ );
	$routes->add ( 'forgot', 'ProfileController::forgot' /**@uses \App\Controllers\ProfileController::forgot * */ );
	$routes->add ( 'signin', 'SigninController::index' /**@uses \App\Controllers\SigninController::index * */ );
	//====================================||   GET   ||====================================
	$routes->add ( '/', 'lab\ClientifyForms::index' /**@uses \App\Controllers\lab\ClientifyForms::index () * */ );
	//====================================||   POST  ||====================================
	$routes->add ( 'searchRfc', 'BlueBullController::searchRfc' /**@uses \App\Controllers\BlueBullController::searchRfc * */ );
	$routes->add ( 'toSignIn', 'SigninController::signIn' /**@uses \App\Controllers\SigninController::signIn * */ );
	//====================================||   PUT   ||====================================
	//====================================||  PATCH  ||====================================
	//====================================|| DELETE  ||====================================
	//====================================||   END   ||====================================
