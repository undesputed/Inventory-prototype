<?php
    require_once 'db/DBHelper.php';

    Class Dealer extends DBHelper
    {
        private $table = 'dealer';
        private $fields = array(
            'dealer_lastname',
            'dealer_firstname',
            'dealer_mi',
            'dealer_username',
            'dealer_password'
        );

        //constructor
        function __construct(){
            return DBHelper::__construct();
        }
        // Create
        function addDealer($data){
            return DBHelper::insertRecord($data,$this->fields,$this->table); 
        }
        // Retreive
        function getAllDealer(){
            return DBHelper::getAllRecord($this->table);
        }
        function getDealerById($ref_id){
            return DBHelper::getRecordById($this->table,'dealer_id',$ref_id);
        }
        function getDealerSuper($ref_id){
            return DBHelper::getRecord($this->table,'dealer_id',$ref_id);
        }
        // Update
        function updateDealer($data,$ref_id){
            return DBHelper::updateRecord($this->table,$this->fields,$data,'dealer_id',$ref_id); 
        }
        // Delete
        function deleteDealer($ref_id){
                return DBHelper::deleteRecord($this->table,'dealer_id',$ref_id);
        }
    }
?>