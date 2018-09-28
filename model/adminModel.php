<?php
    require_once 'db/dbhelper.php';

    Class Admin extends DBHelper
    {
        private $table = 'superadmin';
        private $fields = array(
            'super_lastname',
            'super_firstname',
            'super_mi',
            'super_username',
            'super_password'
        );

        //constructor
        function __construct(){
            return DBHelper::__construct();
        }
        // Create
        function addSuper($data){
            return DBHelper::insertRecord($data,$this->fields,$this->table); 
        }
        // Retreive
        function getAllSuper(){
            return DBHelper::getAllRecord($this->table);
        }
        function getSuperById($ref_id){
            return DBHelper::getRecordById($this->table,'Super_id',$ref_id);
        }
        function getSuper($ref_id){
            return DBHelper::getRecord($this->table,'Super_id',$ref_id);
        }
        // Update
        function updateSuper($data,$ref_id){
            return DBHelper::updateRecord($this->table,$this->fields,$data,'super_id',$ref_id); 
        }
        // Delete
        function deleteSuper($ref_id){
                return DBHelper::deleteRecord($this->table,'Super_id',$ref_id);
        }
    }
?>