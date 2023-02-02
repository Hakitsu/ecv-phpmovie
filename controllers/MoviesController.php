<?php
namespace controllers;

use controllers\base\WebController;
use models\MoviesModel;
use utils\Template;

class MoviesController extends WebController
{
    private $moviesModel;

    function __construct(){
        $this->moviesModel = new MoviesModel();
    }

    function liste(){
        if (isset($_POST['id_movie_update'])) {
            $movies = $this->moviesModel->updateFindById($_POST['id_movie_update']);
            return Template::render("views/global/update_movie.php", array('movies' => $movies)); 
        }else{
            $movies = $this->moviesModel->getAllMovies();
            return Template::render("views/global/movies.php", array('movies' => $movies)); 
        }
    }

    function movie($id){
       
        $movie = $this->moviesModel->findById($id);
        return Template::render("views/global/movie.php", compact('movie'));  
    }

    function galeryByMovie($id){
        $galeryByMovie = $this->moviesModel->findGaleryByMovie($id);
        return Template::render("views/global/movie.php",  array('galeryByMovie' => $galeryByMovie));  
    }

    function listeAdmin(){
        $movies = $this->moviesModel->getAllMovies(); 
        return Template::render("views/global/admin.php", array('movies' => $movies)); 
    }

    function createMovie(){
        $name = $_POST['name'];
        $date = $_POST['date'];
        $synospsis = $_POST['synopsis'];
        $picture_movie = $_POST['picture_movie'];
        $picture_banner = $_POST['picture_banner'];
        $trailer = $_POST['trailer'];
        $story = $_POST['story'];

        $movie = $this->moviesModel->createMovie($name, $date, $synospsis, $picture_movie, $picture_banner, $trailer, $story);
        if ($movie == false) {
            header('Location: add_movie?error');
        }else{
            header('Location: admin');
        }

    }

    function updateMovie(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $date = $_POST['date'];
        $synospsis = $_POST['synopsis'];
        $picture_movie = $_POST['picture_movie'];
        $picture_banner = $_POST['picture_banner'];
        $trailer = $_POST['trailer'];
        $story = $_POST['story'];
        $movie = $this->moviesModel->updateMovie($id, $name, $date, $synospsis, $picture_movie, $picture_banner, $trailer, $story);
        if ($movie == false) {
            header('Location: update_movie?error');
        }else{
            header('Location: admin');
        }
    }

    function deleteMovie(){
        $id = $_POST['id_movie_delete'];
        $movie = $this->moviesModel->deleteMovie($id);
        if ($movie == false) {
            header('Location: update_movie?error');
        }else{
            header('Location: admin');
        }
    }
}