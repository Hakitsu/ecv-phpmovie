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
        $stmt = $this->getPdo()->prepare("SELECT id, name, date, synospsis, picture_movie FROM movies");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function findById(string $id){
        $sql = "SELECT * FROM movies INNER JOIN link_movie_actors INNER JOIN actors
        WHERE movies.id = link_movie_actors.id_movie
        AND link_movie_actors.id_actor = actors.id 
        AND movies.id = {$id}";
        $query = $this->getPdo()->prepare($sql );
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ);    
    }

    public function findGaleryByMovie(string $id){
        $sql = "SELECT * FROM movies INNER JOIN movies_images
        WHERE movies_images.id_movie = movies.id
        AND movies.id = {$id}";

        $query = $this->getPdo()->prepare($sql );
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ); 

    }

}