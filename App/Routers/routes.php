<?php

$router->get('','MainController@home');
$router->get('login','LoginController@login');
$router->get('restore','LoginController@restore');
$router->get('register','LoginController@register');


$router->post('login','LoginController@loginPost');
