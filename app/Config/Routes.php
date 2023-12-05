<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingPageID::home');
$routes->get('/tentang-kami', 'LandingPageID::about');
$routes->get('/galeri', 'LandingPageID::galery');
$routes->get('/hubungi-kami', 'LandingPageID::contact');
$routes->get('/bisnis-kami', 'LandingPageID::business');
$routes->get('/penambangan', 'LandingPageID::minning');
$routes->get('/pengriman-tongkang', 'LandingPageID::forwarding');
