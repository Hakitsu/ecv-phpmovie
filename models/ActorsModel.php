<?php
namespace models;

use models\base\SQL;

class ActorsModel extends SQL
{
    public function __construct()
    {
        parent::__construct('actors', 'id');
    }


    function getAllActors(){
        $sql = "SELECT actors.actors_name, actors.actors_role, movies.name, actors.actors_picture  FROM actors INNER JOIN link_movie_actors INNER JOIN movies 
        WHERE movies.id = link_movie_actors.id_movie
        AND link_movie_actors.id_actor = actors.id order by actors.actors_name";

        $query = $this->getPdo()->prepare($sql );
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ); 
    }

}