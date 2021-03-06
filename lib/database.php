<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author Boris
 */
namespace Lib;

class Database {
    private static  $db = null;
    
    private function __construct() {
        $host =     DB_HOST;
        $username = DB_USER;
        $password = DB_PASS;
        $dbname =   DB_NAME;
        
        $db = new \mysqli($host, $username, $password, $dbname);
        
        self::$db = $db;
    }
    
    public static function  get_instance (){
        static $instance = null;
        
        if ( null === $instance){
            $instance = new static ();
        }
        
        return $instance;
    }
    public static function get_db (){
        return self::$db;
    }
    
}
