<?php

class GetData
{
    public $db = null;

    public function __construct(DB $db)
    {
        if(!isset($db->conn)) return null;
        $this->db = $db;
    }

    public function query($query)
    {
        $result = $this->db->conn->query($query);

        $resultArray = array();

        while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $data;
        }

        return $resultArray;
    }
}

?>