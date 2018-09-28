<?php
    require_once 'db/DBHelper.php';

    Class Cart extends DBHelper
    {
        private $table = 'cart';
        private $fields = array(
            'cart_id',
            'cart_name',
            'cart_quantity',
            'cart_desc',
            'cart_price',
            'cashier_id',
            'cart_payment'
        );

        //constructor
    function __construct(){
        return DBHelper::__construct();
    }
    // Create
    function addCart($data){
        return DBHelper::insertRecord($data,$this->fields,$this->table); 
    }
    // Retreive
    function getAllCart(){
        return DBHelper::getAllRecord($this->table);
    }
    function getCartById($ref_id){
        return DBHelper::getRecordById($this->table,'Cart_id',$ref_id);
    }
    function getCart($ref_id){
        return DBHelper::getRecord($this->table,'cashier_id',$ref_id);
    }
    // Update
    function updateCart($data,$ref_id){
        return DBHelper::updateRecord($this->table,$this->fields,$data,'cart_id',$ref_id); 
    }
    // Delete
    function deleteCart($ref_id){
            return DBHelper::deleteRecord($this->table,'Cart_id',$ref_id);
    }
    }
?>