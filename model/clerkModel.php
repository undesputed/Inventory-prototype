<?php
    require_once 'db/DBHelper.php';

    Class Clerk extends DBHelper
    {
        private $table = 'clerk';
        private $fields = array(
            'clerk_lastname',
            'clerk_firstname',
            'clerk_mi',
            'clerk_username',
            'clerk_password'
        );

        //constructor
    function __construct(){
        return DBHelper::__construct();
    }
    // Create
    function addClerk($data){
        return DBHelper::insertRecord($data,$this->fields,$this->table); 
    }
    // Retreive
    function getAllClerk(){
        return DBHelper::getAllRecord($this->table);
    }
    function getClerkById($ref_id){
        return DBHelper::getRecordById($this->table,'Clerk_id',$ref_id);
    }
    function getClerkSuper($ref_id){
        return DBHelper::getRecord($this->table,'Clerk_id',$ref_id);
    }
    // Update
    function updateClerk($data,$ref_id){
        return DBHelper::updateRecord($this->table,$this->fields,$data,'Clerk_id',$ref_id); 
    }
    // Delete
    function deleteClerk($ref_id){
            return DBHelper::deleteRecord($this->table,'Clerk_id',$ref_id);
    }
    }
?>