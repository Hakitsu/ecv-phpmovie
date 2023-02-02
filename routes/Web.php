<?php

namespace routes;

use controllers\SampleWebController;
use controllers\MoviesController;
use controllers\ActorsController;
use controllers\GaleryController;
use controllers\UserController;
use routes\base\Route;
use utils\Template;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();

        $movies = new MoviesController();

        $actors = new ActorsController();

        $galery = new GaleryController();

        $users = new UserController();

        // Appel la méthode « home » dans le contrôleur $main.
        Route::Add('/', [$main, 'home']);
        Route::Add('/exemple', [$main, 'exemple']);
        Route::Add('/movies', [$movies, 'liste']);
        Route::Add('/movies/movie', [$movies, 'movie']);
        //  Route::Add('/movies/movie', array(
        //         $movies => "movie",
        //         $galeryByMovie     => "galeryByMovie",
        //     ));
        Route::Add('/galery', [$galery, 'liste']);
        Route::Add('/actors', [$actors, 'liste']);
        Route::Add('/connexion',[$main, 'connexion']);
        Route::Add('/check_connexion',[$users, 'connexion']);
        Route::Add('/deconnexion',[$users, 'deconnexion']);
        Route::Add('/register',[$main, 'register']);
        Route::Add('/create_register',[$users, 'addUser']);
        Route::Add('/admin',[$movies, 'listeAdmin']);
        Route::Add('/add_movie',[$main, 'add_movie']);
        Route::Add('/delete_movie',[$movies, 'deleteMovie']);
        Route::Add('/update_movie',[$movies, 'liste']);
        Route::Add('/create_movie',[$movies, 'createMovie']);
        Route::Add('/update_action',[$movies, 'updateMovie']);
        Route::Add('/movies/add_comment',[$movies, 'addComment']);
        

        // Appel la fonction inline dans le routeur.
        // Utile pour du code très simple, où un tes, l'utilisation d'un contrôleur est préférable.
        // Route::Add('/about', function () {
        //     return Template::render('views/global/about.php');
        // });

        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}

