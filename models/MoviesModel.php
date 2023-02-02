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
        $sql = "SELECT * FROM movies 
        INNER JOIN link_movie_actors ON movies.id = link_movie_actors.id_movie 
        INNER JOIN actors ON link_movie_actors.id_actor = actors.id 
        LEFT JOIN comments ON movies.id = comments.id_movie 
        INNER JOIN movies_images ON movies.id = movies_images.id_movie 
        INNER JOIN users
        WHERE movies.id = {$id}";
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

    public function createMovie($name, $date, $synospsis, $picture_movie, $picture_banner, $trailer, $story){
        $get_id_request = "SELECT * FROM movies";
        $get_id = $this->getPdo()->prepare($get_id_request);
        $get_id->execute();
        $id = $get_id->rowCount();
        $id += 1;

        $sql = "INSERT INTO `movies`(`id`,`name`, `date`, `synospsis`, `picture_movie`, `picture_banner`, `trailer`, `story`) 
                             VALUES ('$id','$name','$date','$synospsis','$picture_movie','$picture_banner','$trailer','$story')";
        $query = $this->getPdo()->prepare($sql);
        $query->execute();
    return $query;
    }

    public function getMovie(string $id){
        $sql = "SELECT * FROM movies
        WHERE movies.id = {$id}";
        $query = $this->getPdo()->prepare($sql );
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ);   
    }

    public function updateFindById(string $id){
        $sql = "SELECT * FROM movies 
        WHERE movies.id = {$id}";
        $query = $this->getPdo()->prepare($sql );
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ);    
    }

    public function updateMovie($id, $name, $date, $synospsis, $picture_movie, $picture_banner, $trailer, $story){
        $id = intval($id);
        $sql = "UPDATE `movies` 
                SET `name`='".addslashes($name)."',
                    `date`='$date',
                    `synospsis`='".addslashes($synospsis)."',
                    `picture_movie`='$picture_movie',
                    `picture_banner`='$picture_banner',
                    `trailer`='$trailer',
                    `story`='".addslashes($story)."'
                WHERE movies.id = $id";
        $query = $this->getPdo()->prepare($sql);
        $query->execute();
        return $query;
    }

    public function deleteMovie($id){
        $id = intval($id);
        $sql = "DELETE FROM `movies`
                WHERE movies.id = $id";
        $query = $this->getPdo()->prepare($sql);
        $query->execute();
        return $query;
    }
}