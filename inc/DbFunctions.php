<?php
  /**
   * Author: Lynford Lagondi
   */
  class DbFunctions{

    function __construct(){

      require_once 'DbConfig.php';
      $database = new DbConfig();
      $this->conn = $database->db_connect();

      }

      //get all notification
      public function get_all_notification(){

      //  $sql = "SELECT count(so_num) from  special_occasions")";
        $sql = "SELECT * FROM special_occasions";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array());
        $result = $stmt->fetchAll();
        return $result;
      }

  }

 ?>
