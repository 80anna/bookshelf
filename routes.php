<?php 

    $controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

    if(!$controller) $controller = 'index';

    if(! file_exists("controllers/{$controller}_controller.php")){
        abort(404);
    }

    require "controllers/{$controller}_controller.php";
 
?>