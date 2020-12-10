<?php

class Queries
{
    public $db = null;

    public function __construct(DB $db)
    {
        if(!isset($db->conn)) return null;
        $this->db = $db;
    }

    public function getData($query)
    {
        $result = $this->db->conn->query($query);

        // echo $result;
        $resultArray = array();

        while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $data;
        }
        if(!$result){
            echo $this->db->conn->error;
        }else{
            return $result;
        }
    }

    public function insertData($query)
    {
        $result = $this->db->conn->query($query);
        echo '<p>Check 2</p>';
        if(!$result){
            echo $this->db->conn->error;
        }else{
            return $result;
        }
    }

    public function updateData($query)
    {
        $result = $this->db->conn->query($query);

        return $result;
    }

    public function deleteData($query)
    {
        $result = $this->db->conn->query($query);

        return $result;
    }
}

?>
