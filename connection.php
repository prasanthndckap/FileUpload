<?php

class Database
{
    public $db;

    public function __construct()
{
    try{
        $this->db = new PDO
        (
            'mysql:host=localhost;dbname=file_upload',
            'admin',
            'welcome'
        );

    }
    catch(Exception $e){
        die("connection error");
    }
}

}