<?php

use mcr\http\request;
use mcr\http\routing\route_collector;

/** @var route_collector $router */

$router->addGroup('admin/', function(route_collector $router) {
    $router->get('news', '\modules\admin\news@news_controll', 'admin_cp.news.index');
    $router->post(
        'news[/{id}[/{action}]]', '\modules\admin\news@news_controll', 'admin_cp.news.index'
    );
});

$router->get('/', '\modules\news@index', 'home');

$router->get('/users[/{id}]', '\modules\news@index', function (request $request) {
    $user = $request->id;
	
    if (!empty($user)) return 'User id: ' . $user;
	
    return 'User list';
});