<?php

namespace controllers;

use controllers\base\WebController;
use utils\Template;

class SampleWebController extends WebController
{
    function home(): string
    {
        return Template::render("views/global/home.php");
    }

    function exemple($parametre = 'Valeur par défaut'): string
    {
        return "Voilà votre paramètre : $parametre";
    }

    function movies()
    {
        return Template::render("views/global/movies.php");
    }

    function galery()
    {
        return Template::render("views/global/galery.php");
    }

    function actors()
    {
        return Template::render("views/global/actors.php");
    }
    function connexion()
    {
        return Template::render("views/global/connexion.php");
    }
}