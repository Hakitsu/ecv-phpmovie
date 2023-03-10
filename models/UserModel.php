<?php
namespace models;

use models\base\SQL;

class UserModel extends SQL
{
  public function __construct()
  {
     parent::__construct('user','id');
  }

  function sessionUser($username){
    $sql = "SELECT id, username, `password`, `role` FROM users WHERE username = ?";
    $query = $this->getPdo()->prepare($sql);
    $query->execute(array($username));
    return $query;
  }

  function registerUser($username,$password){
    $sql = "INSERT INTO `users`(`username`, `password`, `role`) VALUES ('$username','$password','user')";
    $query = $this->getPdo()->prepare($sql);
    $query->execute();
    return $query;
  }
}