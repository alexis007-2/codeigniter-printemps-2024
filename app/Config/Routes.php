<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/hello-world','Home2::helloWorld');
$routes->get('/ca-va','Home2::caVa');
$routes->get('/acheter','Maison::acheter');
$routes->get('/vendre','Maison::vendre');
$routes->get('/demarrer','Voiture::demarrer');
$routes->get('/freiner','Voiture::freiner');
$routes->get('/salut/(:alpha)','Home2::salut/$1');
$routes->get('/identite/(:alpha)/(:alpha)/(:num)','Home2::identite/$1/$2/$3');
$routes->get('/vendre2/(:alpha)/(:num)','Maison::vendre2/$1/$2');
$routes->get('/hello-world-2','Home2::helloWorld2');
$routes->get('/hello-world-3','Home2::helloWorld3');
$routes->get('/ma-voiture/(:alphanum)/(:num)','Voiture::maVoiture/$1/$2');
$routes->get('/hello-world-4','Home2::helloWorld4');
$routes->get('/identite2/(:alpha)/(:alpha)/(:num)','Home2::identite2/$1/$2/$3');
$routes->get('/list-resto','Home2::listResto');
$routes->get('/list-tele','Home2::listTele');
$routes->get('/ma-voiture-2/(:alphanum)/(:num)','Voiture::maVoiture2/$1/$2');








