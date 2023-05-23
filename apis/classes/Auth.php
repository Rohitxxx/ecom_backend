<?php
require_once './classes/DB.php';
class Auth extends DB
{

    function login($email, $password)
    {
        $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
        $result = mysqli_query($this->con, $sql);
        if (mysqli_num_rows($result) > 0)
            return 1;
        else
            return 0;
    }
}
