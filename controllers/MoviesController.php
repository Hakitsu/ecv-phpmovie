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
        $movies = $this->moviesModel->getAllMovies(); 
        return Template::render("views/global/movies.php", array('movies' => $movies)); 
    }

    function movie($id){
       
        $movie = $this->moviesModel->findById($id);
        return Template::render("views/global/movie.php", compact('movie'));  
    }

    function galeryByMovie($id){
        $galeryByMovie = $this->moviesModel->findGaleryByMovie($id);
        return Template::render("views/global/movie.php",  array('galeryByMovie' => $galeryByMovie));  
    }

    
  
}