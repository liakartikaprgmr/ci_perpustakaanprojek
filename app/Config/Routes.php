<?php
namespace Config;


$routes = Services::routes();


if (file_exists(SYSTEMPATH . 'Config/Routes.php')){
    require SYSTEMPATH . 'Config/Routes.php';
}





$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
//admin
$routes->get('Admin', 'Admin::index');
//login
$routes->get('Login', 'Login::index');
if (file_exists(APPPATH . 'config/' . ENVIRONMENT . '/Routes.php'))
{
    require APPPATH . 'config/' . ENVIRONMENT . '/Routes.php';
}