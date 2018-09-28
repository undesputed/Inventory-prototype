<?php
    require_once 'db/DBHelper.php';

    Class Inventory extends DBHelper
    {
        private $table = 'inventory';
        private $fields = array(
            'inven_id',
            'inven_name',
            'inven_quantity',
            'inven_desc',
            'inven_price',
            'cashier_id'
        );

        //constructor
    function __construct(){
        return DBHelper::__construct();
    }
    // Create
    function addInven($data){
        return DBHelper::insertRecord($data,$this->fields,$this->table); 
    }
    // Retreive
    function getAllInven(){
        return DBHelper::getAllRecord($this->table);
    }
    function getInvenById($ref_id){
        return DBHelper::getRecordById($this->table,'inven_id',$ref_id);
    }
    function getInven($ref_id){
        return DBHelper::getRecord($this->table,'cashier_id',$ref_id);
    }
    // Update
    function updateInven($data,$ref_id){
        return DBHelper::updateRecord($this->table,$this->fields,$data,'inven_id',$ref_id); 
    }
    // Delete
    function deleteInven($ref_id){
            return DBHelper::deleteRecord($this->table,'inven_id',$ref_id);
    }
    }
?>