<?php
class User{

    public function Encode($username, $password){
        global $api;
        return bin2hex(hash("sha512", $password . $username, true) ^ hash("whirlpool", $username . $password, true));
    }

    public function Login($username, $password){
        global $api;
        if (query("SELECT * FROM `simpleauth_players` WHERE `name`=?;",array($username))->rowCount()==1) {
        $u = query("SELECT * FROM `simpleauth_players` WHERE `name`=?;",array($username))->fetch();
            if ($u['hash'] = $this->Encode($username,$password)) {
                $_SESSION['username'] = $u['name'];
                $_SESSION['point'] = $u['point'];
                $_SESSION['admin'] = $u['admin'];
                echo '<center><h2>สำเร็จ!</h2><a class="btn btn-success btn-block" href="?page=index">หน้าเเรก</a></center>';

                #rdr("?page=index");
                return true;
            } else {
                echo '<center><h2>รหัสผ่านไม่ถูกต้อง!</h2><a class="btn btn-success btn-block" href="?page=login">หน้าเดิม</a></center>';
                return false;
            }
        } else {
            echo '<center><h2>ไม่สำเร็จ!</h2><a class="btn btn-success btn-block" href="?page=login">หน้าเดิม</a></center>';
            return false;
            return false;
        }
    }
}