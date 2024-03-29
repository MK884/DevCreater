<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
// CRUD RESTful Routes
$routes->get('users-list', 'UserCrud::index');
$routes->get('user-form', 'UserCrud::create');
$routes->post('submit-form', 'UserCrud::store');
$routes->match(['get','post'],'posts', 'UserCrud::posts');
$routes->match(['get','post'],'chat', 'UserCrud::chat');
$routes->match(['get','post'],'postview', 'UserCrud::postview');
$routes->match(['get','post'],'home', 'UserCrud::home');
$routes->match(['get','post'],'user-about', 'UserCrud::user_about');

$routes->match(['get','post'],'logout', 'UserCrud::logout');
$routes->match(['get','post'],'about', 'UserCrud::about');
$routes->match(['get','post'],'contact', 'UserCrud::contact');

$routes->get('edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes->match(['get','post'],'update/(:num)', 'UserCrud::update/$1');
$routes->get('delete/(:num)', 'UserCrud::delete/$1');

// $routes->get('/', 'SignupController::index');
$routes->get('/signup', 'Login::index');
$routes->match(['get', 'post'], 'store', 'Login::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
