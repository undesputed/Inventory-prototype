<?php
require_once 'db/dbhelper.php';
Class Login extends DBHelper{
    function __construct(){
        return DBHelper::__construct();
    }
    function login($data){
        return DBHelper::logginSuper($data);
    }
    function admin($data){
        return DBHelper::logginAdmin($data);
    }
    function cashier($data){
        return DBHelper::logginCashier($data);
    }
    function dealer($data){
        return DBHelper::logginDealer($data);
    }
    function clerk($data){
        return DBHelper::logginClerk($data);
    }
}