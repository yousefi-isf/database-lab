<?php
class mysqli_conn {

    private $host = "localhost";
    private $uname = "root";
    private $pass = "";
    private $db_name = "movie_land";
    public $con;
    private $tb_name = "products";
    function __construct() {
        // Connect to mysql database
        $this->con = new mysqli($this->host , $this->uname , $this->pass , $this->db_name);
    }

    // make connection
    public function mysql_conn()
    {
        // Check connection
        if ($this->con -> connect_errno) {
            echo "Failed to connect to MySQL: " . $con -> connect_error;
            exit();
        }
    }

}
