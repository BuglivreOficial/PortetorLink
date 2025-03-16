<?php

use Pecee\SimpleRouter\SimpleRouter as router;

Router::setDefaultNamespace("\Core\Controller");

Router::get("/", "HomeController@index");


Router::start();