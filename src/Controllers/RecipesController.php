<?php

namespace CookBook\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class RecipesController {
    
    public function getAll(Application $app): string {
       $recipes = $app['db']->fetchAll('SELECT * FROM recipes');
       return $app['twig']->render('home.twig', ['recipes' => $recipes]);
    }
}
