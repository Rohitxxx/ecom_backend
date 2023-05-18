<?php

class DB
{
    public $con;
    function __construct()
    {
        require_once './constants/Constants.php';
        $this->con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }
}
