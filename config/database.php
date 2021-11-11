<?php
class Database{

   // Database instellingen
   private $host = "localhost";
   private $db_name = "scheldworden-database";
   private $username = "root";
   private $password = "";
   public $conn;

   public function getConnection(){

       $this->conn = null;

       try
{
   $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
}
catch(Exception $e)
{
   echo "Fout tijdens verbinden: " . $e->getMessage();
}

       return $this->conn;
   }
}

 $con = mysqli_connect('localhost', 'root', '', 'scheldworden-database') or die('Cannot connect to database. '.mysqli_connect_error());
 if($con) echo 'You are connected!<br/>';
 //AAAAAAAAAAAAAAAAAAAAAAAAAA

