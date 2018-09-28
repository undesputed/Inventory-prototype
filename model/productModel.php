<?php
    require_once 'db/DBHelper.php';

    Class Product extends DBHelper
    {
        private $table = 'product';
        private $fields = array(
            'prod_id',
            'prod_name',
            'prod_quantity',
            'prod_desc',
            'prod_price',
            'dealer_id',
            'cashier_id'
        );

        //constructor
    function __construct(){
        return DBHelper::__construct();
    }
    // Create
    function addProduct($data){
        return DBHelper::insertRecord($data,$this->fields,$this->table); 
    }
    // Retreive
    function getAllProduct(){
        return DBHelper::getAllRecord($this->table);
    }
    function getProductById($ref_id){
        return DBHelper::getRecordById($this->table,'Prod_id',$ref_id);
    }
    function getProduct($ref_id){
        return DBHelper::getRecord($this->table,'prod_id',$ref_id);
    }
    // Update
    function updateProduct($data,$ref_id){
        return DBHelper::updateRecord($this->table,$this->fields,$data,'cashier_id',$ref_id); 
    }
    // Delete
    function deleteProduct($ref_id){
            return DBHelper::deleteRecord($this->table,'Prod_id',$ref_id);
    }
    }
?>