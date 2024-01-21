<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/login', 'LoginController::show');
$routes->post("/loginSave",'LoginController::loginSave');
$routes->get('/dashboard', 'LoginController::dashboard');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/user_form', 'LoginController::user_form');
$routes->get('/doctors_form', 'DoctorController::doctors_form');
$routes->get('/doctors_table', 'DoctorController::doctors_table');
$routes->get('/user_form1', 'LoginController::user_form1');
$routes->post('/saveDoctorProfile', 'DoctorController::saveDoctorProfile');
$routes->get('/doctors_fee', 'DoctorController::doctors_fee');

$routes->post('/Savedoctorsfee', 'DoctorController::Savedoctorsfee');

// $routes->get('/editDoctor', 'DoctorController::editDoctor');
// $routes->get('/deleteDoctor', 'DoctorController::deleteDoctor');
$routes->get('/editDoctor/(:num)', 'DoctorController::editDoctor/$1');
$routes->get('/deleteDoctor/(:num)', 'DoctorController::deleteDoctor/$1');





