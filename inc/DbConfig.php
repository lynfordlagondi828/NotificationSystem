<?php

/**
 * Created by PhpStorm.
 * User: Lynford
 * Date: 25/06/2019
 * Time: 8:21 AM
 */
class DbConfig{
    private $conn;

    //Constructor
    function __construct(){
    }

    function db_connect(){

      $this->conn = new PDO('mysql:host=localhost;dbname=hr','root','');
      return $this->conn;
    }
}
