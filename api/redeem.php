<?php
class Redeem{
    public function AddRedeem($redeem){
        global $api;

        if(query("SELECT * FROM `code` WHERE `redeem`=?;",array($redeem))->rowCount()==1){
            $code = query("SELECT * FROM `code` WHERE `redeem`=?;",array($redeem))->fetch();
            $nnn = $_SESSION['username'];
                echo '<center><h3>คุณได้รับ '.$code['name'].' !</h3> <a href="?page=index" class="btn btn-success">กลับไปหน้าเดิม</a></center>';
                //UPDATE group
                $com = $code['command'];
                $command = str_replace(array("{user}"),array($_SESSION['username']),$com);
                $api->rcon->connect();
                $api->rcon->send_command($command);
                //del code
                query("DELETE FROM `code` WHERE `redeem`=?;",array($redeem));
                return true;
        }else{
            echo '<center><h3>ไอเทมโค้ดไม่ถูกต้อง !</h3> <a href="?page=redeem" class="btn btn-danger">กลับไปหน้าเติมไอเทมโค้ด</a></center>';
        }


    }

    public function generateRedeem($length = 16){
        global $api;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function SaveRedeem($name,$command){
        global $api;
        $code = $api->redeem->generateRedeem();
        query("INSERT INTO `code` (`name`,`redeem`,`command`) VALUES ('".$name."','".$code."','".$command."')");
        #rdr("?page=backend");
        return true;
    }
}