<?php
#require './config.php';
require 'func.php';
require 'user.php';
require 'rcon.php';
require 'Shop.php';
require 'redeem.php';
$_config = array();
$_config['db_host'] = "127.0.0.1 ";
$_config['db_user'] = "root";
$_config['db_password'] = "Akeky2008000";
$_config['db_database'] = "simpleauth";
$api = (object) array(
    "sql" => new PDO("mysql:host=".$_config['db_host']."; dbname=".$_config['db_database'].";", $_config['db_user'], $_config['db_password']),
    "user" => new User(),
    "shop" => new Shop(),
    "redeem" => new Redeem(),
    "rcon" => new Rcon("sv1.orangepe.com","19132","eoST16Rs0a","300"),
    );
