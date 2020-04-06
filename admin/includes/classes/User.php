<?php
include "Database.php";

class User
{
    public $id;
    public $username;
    public $password;
    public $first;
    public $last;

    public static function find_all_users()
    {
        $d = new Database();
        $result = $d->query("SELECT * FROM users");
        return $result;
    }

    public static function find_one_user($username)
    {
        $d = new Database();
        $result = $d->query("SELECT * FROM users WHERE username like '%$username%'");
        return $result;
    }

    public static function verify_user($username, $password)
    {
        $d = new Database();
        //$result = $d->query("SELECT * FROM users");

        $result = $d->query("SELECT * FROM users WHERE username ='$username' AND password = '$password'");

        return $result;
    }

}