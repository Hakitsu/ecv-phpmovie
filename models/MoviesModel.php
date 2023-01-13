<?php
namespace models;

use models\base\SQL;

class MoviesModel extends SQL
{
    public function __construct()
    {
        parent::__construct('movies', 'id');
    }


    function getAllMovies(){
        $stmt = $this->getPdo()->prepare("SELECT name, date, synospsis FROM movies");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

}