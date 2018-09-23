<?php
    require 'db/DBHelper.php';

    Class Product extends DBHelper
    {
        private $table = 'product';
        private $fields = array(
            'prod_name',
            'prod_quantity',
            'prod_desc',
            'prod_price',
            'super_id',
            'admin_id',
            'dealer_id',
            'cashier_id',
            'clerk_id'
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
    function getProductSuper($ref_id){
        return DBHelper::getRecord($this->table,'super_id',$ref_id);
    }
    // Update
    function updateProduct($data,$ref_id){
        return DBHelper::updateRecord($this->table,$this->fields,$data,'Prod_id',$ref_id); 
    }
    // Delete
    function deleteProduct($ref_id){
            return DBHelper::deleteRecord($this->table,'Prod_id',$ref_id);
    }
    }
?>