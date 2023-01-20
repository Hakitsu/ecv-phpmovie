<?php
namespace models;

use models\base\SQL;

class GaleryModel extends SQL
{
    public function __construct()
    {
        parent::__construct('galery', 'id');
    }


    function getAllImages(){
        $sql = "SELECT link_picture  FROM movies_images";

        $query = $this->getPdo()->prepare($sql );
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ); 
    }

}