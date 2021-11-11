<?php
class scheldworden
{

    // database connectie en tabel-woord
    private $conn;
    private $table_name = "scheldworden";

    // object properties
    public $id;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // read scheldwordens
    function readAll()
    {

        // select all query
        $query = "SELECT * FROM " . $this->table_name;

        $result = $this->conn->query($query);

        return $result;
    }
    function readOne($id)
    {

        // select all query
        $query = "SELECT * FROM $this->table_name WHERE id=$id";

        $result = $this->conn->query($query);

        return $result;
    }
    function create($woord, $goedgekeurd, $gradatieScheldwoord )
    {
        
        // select all query
        $query = "INSERT INTO `scheldworden` ( `woord`, `goedgekeurd`, gradatieScheldwoord) VALUES ( '$woord', '$goedgekeurd', '$gradatieScheldwoord')";
        $result = $this->conn->query($query);
        echo $query;
        return $result;
    }
    function update($id, $woord, $goedgekeurd, $gradatieScheldwoord )
    {
        
        // select all query
        $query = "UPDATE `scheldworden` SET woord = '$woord', goedgekeurd = '$goedgekeurd', gradatieScheldwoord = '$gradatieScheldwoord'  WHERE id = $id ";
        $result = $this->conn->query($query);
        echo $query;
        return $result;
    }
    function Delete($id, $woord, $goedgekeurd, $gredatieScheldwoord )
    {
        
        // select all query
        $query = "DELETE FROM `scheldworden` WHERE '$id'";
        $result = $this->conn->query($query);
        echo $query;
        return $result;
    }
    
}
