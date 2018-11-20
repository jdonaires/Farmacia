<?php
  class DBAccess
  {

    /*Cualquier duda me informan................... */

    private $conn;

    public function __CONSTRUCT()
    {
      try {
        $this->conn = new PDO('mysql:host=localhost;dbname=farmacia', 'root', '');
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
