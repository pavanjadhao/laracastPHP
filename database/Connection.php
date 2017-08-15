<?php 
class Connection {
    public static function make($config) {
        try {
            return new PDO(
                $config['serverName'].';dbname='.$config['databaseName'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
}