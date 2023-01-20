<?php
namespace controllers;

use controllers\base\WebController;
use models\GaleryModel;
use utils\Template;

class GaleryController extends WebController
{
    private $galeryModel;

    function __construct(){
        $this->galeryModel = new GaleryModel();
    }

    function liste(){
        $galery = $this->galeryModel->getAllImages(); 
        return Template::render("views/global/galery.php", array('galery' => $galery)); 
    }  
}