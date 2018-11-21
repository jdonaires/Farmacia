<?php
  class DBAccess
  {

    /*Cualquier duda me informan................... */

    private $conn;

    public function __CONSTRUCT()
    {
      try {
          $this->conn = new PDO("mysql:host=software-if.mysql.database.azure.com;dbname=farmacia", "bd_usuario@software-if", "123456");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e ) {
        echo "DBAcess error: " .$e->getMessage();
      }
  }

    public function get_connection()
    {
      return $this->conn;
    }
  }
?>
