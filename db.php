<!-- <?php

class DB
{
  //Databse Connection

    protected $servername = "sql12.freesqldatabase.com";
    protected $username = "sql12386150";
    protected $password = "CSCDSdXaCZ";
    protected $dbname = "sql12386150";

    public $conn = null;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname, 3306);
        if ($this->conn->connect_error) {
            echo "Connection failed: " . $this->conn->connect_error;
        }
        // echo "Connected successfully <br/>";
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    protected function closeConnection()
    {
        if($this->conn != null)
        {
            $this->conn->close();
            $this->conn = null;
        }
    }
}


    
?> -->
