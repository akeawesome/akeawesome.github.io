<?php
class Shop{
    public function buy($id){
        global $api;
        $user = query("SELECT * FROM `simpleauth_players` WHERE `name`=?",array($_SESSION['username']))->fetch();
        $item = query("SELECT * FROM `item` WHERE `id`=?;",array($id))->fetch();
        if($user['point']>=$item['price']){
                $com = $item['command'];
                $command = str_replace(array("{user}","{group}"),array($_SESSION['username'],$item['name']),$com);
                $api->rcon->connect();
                $api->rcon->send_command($command);
                $point = $user['point'] - $item['price'];
                query("UPDATE `simpleauth_players` SET `point`=? WHERE `name`=?;",array($point,$_SESSION['username']));
                unset($_SESSION['point']);
                $_SESSION['point'] = $user['point'];
            return true;
        }else{
            return false;
        }
    }
    public function add($title,$price,$command,$image){
        global $api;
        if($_SESSION['admin'] == "true"){
            query("INSERT INTO `item` (`id`,`name`,`price`,`image`,`command`) VALUES ('?','".$title."','".$price."','".$image."','".$command."')");
            return true;
        }else{
            return false;
        }

    }
    public function delete($id){
        global $api;
        if($_SESSION['admin'] == "true"){
            query("DELETE FROM `item` WHERE `id`=?",array($id));
            return true;
        }else{
            return false;
        }

    }
}