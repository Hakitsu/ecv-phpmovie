<?php
namespace controllers;

use controllers\base\WebController;
use models\ActorsModel;
use utils\Template;

class ActorsController extends WebController
{
    private $actorsModel;

    function __construct(){
        $this->actorsModel = new ActorsModel();
    }

    function liste(){
        $actors = $this->actorsModel->getAllActors(); 
        return Template::render("views/global/actors.php", array('actors' => $actors)); 
    }  
}