<?php
require_once './classes/DB.php';
class Products extends DB
{
    function getProducts()
    {
        $sql = "select * from products";
        $result = mysqli_query($this->con, $sql);
        $temp = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $temp[] = $row;
        }
        return $temp;
    }
}
