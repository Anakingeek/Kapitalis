<?php

// mapping de nos différentes routes avec la méthode map()
$router->map('GET', '/', 'home', 'home');
$router->map('GET', '/contact', 'contact', 'contact');
$router->map('GET', '/about', 'about', 'about');
$router->map('GET', '/achievements', 'achievements', 'achievements');
$router->map('GET', '/achievements/[*:slug]', 'achievements', 'achievement');
$router->map('GET', '/projects', 'projects', 'projects');
$router->map('GET', '/projects/[*:slug]', 'projects', 'project');
$router->map('GET', '/news', 'news', 'news');
$router->map('GET', '/news/[*:slug]', 'news', 'single_news');


?>