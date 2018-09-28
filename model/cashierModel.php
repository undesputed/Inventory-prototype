<?php
    require_once 'db/DBHelper.php';

    Class Cashier extends DBHelper
    {
        private $table = 'cashier';
        private $fields = array(
            'cashier_lastname',
            'cashier_firstname',
            'cashier_mi',
            'cashier_username',
            'cashier_password'
        );

        //constructor
    function __construct(){
        return DBHelper::__construct();
    }
    // Create
    function addCashier($data){
        return DBHelper::insertRecord($data,$this->fields,$this->table); 
    }
    // Retreive
    function getAllCashier(){
        return DBHelper::getAllRecord($this->table);
    }
    function getCashierById($ref_id){
        return DBHelper::getRecordById($this->table,'Cashier_id',$ref_id);
    }
    function getCashierSuper($ref_id){
        return DBHelper::getRecord($this->table,'Cashier_id',$ref_id);
    }
    // Update
    function updateCashier($data,$ref_id){
        return DBHelper::updateRecord($this->table,$this->fields,$data,'Cashier_id',$ref_id); 
    }
    // Delete
    function deleteCashier($ref_id){
            return DBHelper::deleteRecord($this->table,'Cashier_id',$ref_id);
    }
    }
?>