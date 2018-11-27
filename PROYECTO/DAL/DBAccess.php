<?php
  class DBAccess
  {



    private $conn;

    public function __CONSTRUCT()
    {
      try {
        $this->conn = new PDO('mysql:host=software-if.mysql.database.azure.com;dbname=farmacia', 'meister@software-if', '@sd12345678');
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
