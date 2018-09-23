<?php
require 'db/dbhelper.php';
Class Login extends DBHelper{
    function __construct(){
        return DBHelper::__construct();
    }
    function login($data){
        return DBHelper::logginSuper($data);
    }
    function admin($data){
        return DBHelper::loginAdmin($data);
    }
    function cashier($data){
        return DBHelper::loginCahier($data);
    }
    function dealer($data){
        return DBHelper::loginDealer($data);
    }
}