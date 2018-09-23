<?php
    require 'db/DBHelper.php';

    Class Admin extends DBHelper
    {
        private $table = 'admin';
        private $fields = array(
            'admin_lastname',
            'ádmin_firstname',
            'admin_mi',
            'admin_username',
            'admin_password'
        );

        //constructor
    function __construct(){
        return DBHelper::__construct();
    }
    // Create
    function addAdmin($data){
        return DBHelper::insertRecord($data,$this->fields,$this->table); 
    }
    // Retreive
    function getAllAdmin(){
        return DBHelper::getAllRecord($this->table);
    }
    function getAdminById($ref_id){
        return DBHelper::getRecordById($this->table,'admin_id',$ref_id);
    }
    function getAdminSuper($ref_id){
        return DBHelper::getRecord($this->table,'admin_id',$ref_id);
    }
    // Update
    function updateAdmin($data,$ref_id){
        return DBHelper::updateRecord($this->table,$this->fields,$data,'admin_id',$ref_id); 
    }
    // Delete
    function deleteAdmin($ref_id){
            return DBHelper::deleteRecord($this->table,'admin_id',$ref_id);
    }
    }
?>