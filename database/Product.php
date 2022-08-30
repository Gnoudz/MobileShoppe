<?php
// fetch product from database
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->conn)) return null;
        $this->db = $db;
    }

    //fetch product data using getData Method
    public function getData($table = 'product')
    {
        $result = mysqli_query($this->db->conn, "SELECT * FROM {$table}");
        $resultArr = array();

        //fetch product data
        while($item = mysqli_fetch_assoc($result)) {
            $resultArr[] = $item;
        }
        return $resultArr;
    }
}
