<?php
    /**
    * Csatlakozási adatok, később módosítani kell ha feltöltöm
    */
    define('HOST', 'localhost');
    define('DATABASE', 'wos3ko_web2');
    define('USER', 'root');
    define('PASSWORD', '');
    /**
     * Csatlakozás az adatbázishoz
     */

    class Database {
        private static $connect = FALSE;
        
        public static function getConnection() {
            if(! self::$connect) {
                self::$connect = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD,
                      array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                self::$connect->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
            }
            return self::$connect;
        }
    }

?>