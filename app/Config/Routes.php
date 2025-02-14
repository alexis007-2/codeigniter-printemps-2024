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
$routes->get('/test-vue','Home2::testVue');
$routes->get('/test-vue-2/(:alpha)/(:alpha)','Home2::testVue2/$1/$2');
$routes->get('/test-vue-3','Home2::testVue3');
$routes->get('/test-vue-4','Home2::testVue4');
$routes->get('/test-vue-5','Home2::testVue5');
$routes->get('/tous-les-tags','Tag::cListAllTag');
$routes->get('/toutes-les-categories','Categorie::cListAllCategorie');
$routes->get('/tag/(:num)','Tag::cListOneTag/$1');
$routes->get('/tag-decroissant','Tag::cListAllTagDesc');
$routes->get('/count-tag','Tag::cCountTag');
$routes->get('/limit-tag/(:num)','Tag::cLimitTag/$1');
$routes->get('/add-tag','Tag::cAddTag');
$routes->get('/majtag/(:num)','Tag::cUpdateTag/$1');
$routes->get('/suptag/(:num)','Tag::cDeleteTag/$1');
$routes->get('/add-categorie','Categorie::cAddCategorie');
$routes->get('/maj-categorie/(:num)','Categorie::cUpdateCategorie/$1');
$routes->get('/sup-categorie/(:num)','Categorie::cDeleteCategorie/$1');
$routes->get('/tous-les-utilisateurs','User::cListAllUser');
$routes->get('/utilisateur/(:num)','User::cListOneUser/$1');
$routes->get('/add-user','User::cAddUser');
$routes->get('/maj-user/(:num)','User::cUpdateUser/$1');
$routes->add('/add-tag-form','Tag::cAddTagForm');
$routes->add('/add-categorie-form','Categorie::cAddCategorieForm');
$routes->add('/add-user-form','User::cAddUserForm');
$routes->get('/tous-les-articles','Article::cListAllArticle');
$routes->get('/un-article/(:num)','Article::cListOneArticle/$1');
$routes->get('un-article-commentaire/(:num)','Article::cOneArticleCommentaire/$1');
$routes->add('add-article-form','Article::cAddArticleForm');





