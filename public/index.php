<?php

use App\Routers\MainRouter;
use App\Request\Request;

require __DIR__ . '/../vendor/autoload.php';

$request = MainRouter::loadRoutes()->direct(Request::getUri(),Request::getMethod());

