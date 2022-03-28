<?php

class DataBase
{

    public static function bdd()
    {
        return $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }
}
