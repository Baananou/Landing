<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('settings', SettingController::class);

    $router->resource('partners', PartnerController::class);

    $router->resource('projects', ProjectController::class);

    $router->resource('works', WorkController::class);
    
    $router->resource('subs', SubController::class);

    $router->resource('testimonials', TestimonialController::class);
});

