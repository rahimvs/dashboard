<?php
if (!defined('PASSWORD_BCRYPT')) {
        define('PASSWORD_BCRYPT', 1);
        define('PASSWORD_DEFAULT', PASSWORD_BCRYPT);
}

Class Password {

    public function __construct() {}

    function password_hash($password) {
       $hashedPassword = sha1($password);
       return $hashedPassword;
    }

    public function password_verify($password, $hash) {
        if ($password == $hash) {
            return true;
            exit();
        }
        return false;
    }
}