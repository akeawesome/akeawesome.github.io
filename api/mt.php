<?php
/* API Connection  TMTopup for Dadteam.Com*/
/*
* Modify by Nst Interactive [http://www.nstinteractive.com/]
*/


# ------------------------------------- Config Begin ------------------------------------- #
// ------------------------------------------------------------------------------------------------
/* MySQL Config | Begin */
// Hostname ของ MySQL Server
$_CONFIG['mysql']['dbhost'] = 'localhost';

// Username ที่ใช้เชื่อมต่อ MySQL Server
$_CONFIG['mysql']['dbuser'] = 'root';

// Password ที่ใช้เชื่อมต่อ MySQL Server
$_CONFIG['mysql']['dbpw'] = '';

// ชื่อฐานข้อมูลที่เราจะเติม Point ให้
$_CONFIG['mysql']['dbname'] = 'apvp';

// ชื่อตารางที่เราจะเติม Point ให้ ตัวอย่าง : member
$_CONFIG['mysql']['tbname'] = 'user';

// ชื่อ field ที่ใช้อ้าง Username
$_CONFIG['mysql']['field_username'] = 'username';

// ชื่อ field ที่ใช้ในการเก็บ Point จากการเติมเงิน
$_CONFIG['TMN']['point_field_name'] = 'point';
/* MySQL Config | End */
// ------------------------------------------------------------------------------------------------


// ------------------------------------------------------------------------------------------------
/* จำนวน Point ที่จะได้รับเมื่อเติมเงินในราคาต่างๆ | Begin */
$_CONFIG['TMN'][50]['point'] = 50;					// Point ที่ได้รับเมื่อเติมเงินราคา 50 บาท
$_CONFIG['TMN'][90]['point'] = 90;					// Point ที่ได้รับเมื่อเติมเงินราคา 90 บาท
$_CONFIG['TMN'][150]['point'] = 150;				// Point ที่ได้รับเมื่อเติมเงินราคา 150 บาท
$_CONFIG['TMN'][300]['point'] = 300;				// Point ที่ได้รับเมื่อเติมเงินราคา 300 บาท
$_CONFIG['TMN'][500]['point'] = 500;				// Point ที่ได้รับเมื่อเติมเงินราคา 500 บาท
$_CONFIG['TMN'][1000]['point'] = 1000;			// Point ที่ได้รับเมื่อเติมเงินราคา 1,000 บาท
/* จำนวน Point ที่จะได้รับเมื่อเติมเงินในราคาต่างๆ | End */
// ------------------------------------------------------------------------------------------------


// กำหนด API Passkey
define('API_PASSKEY', 'toomna999');

# -------------------------------------- Config End -------------------------------------- #


require_once('AES.php');


// ------------------------------------------------------------------------------------------------
/* เชื่อมต่อฐานข้อมูล | Begin */
mysqli_connect($_CONFIG['mysql']['dbhost'],$_CONFIG['mysql']['dbuser'],$_CONFIG['mysql']['dbpw']) or die('ERROR|DB_CONN_ERROR|' . mysql_error());
mysqli_select_db("apvp") or die('ERROR|DB_SEL_ERROR|' . mysql_error());
/* เชื่อมต่อฐานข้อมูล | End */
// ------------------------------------------------------------------------------------------------


if($_SERVER['REMOTE_ADDR'] == '203.146.127.115' && isset($_GET['request']))
{
    $aes = new Crypt_AES();
    $aes->setKey(API_PASSKEY);
    $_GET['request'] = base64_decode(strtr($_GET['request'], '-_,', '+/='));
    $_GET['request'] = $aes->decrypt($_GET['request']);
    if($_GET['request'] != false)
    {
        parse_str($_GET['request'],$request);
        $request['Ref1'] = base64_decode($request['Ref1']);

        /* Database connection | Begin */
        $result = mysqli_query('SELECT `id` FROM `user` WHERE `username`=\'' . mysql_real_escape_string($request['Ref1']) . '\' LIMIT 1') or die(mysql_error());
        if(mysqli_num_rows($result) == 1)
        {
            $row = mysql_fetch_assoc($result);
            if(mysqli_query('UPDATE `user` SET `point`=`point`+' . $_CONFIG['TMN'][$request['cardcard_amount']]['point'] . ' WHERE `username`=' . $row['username']) == false)
            {
                echo 'ERROR|MYSQL_UDT_ERROR|' . mysql_error();
            }
            else
            {
                echo 'SUCCEED|UID=' . $row[$_CONFIG['mysql']['field_username']];
            }
        }
        else
        {
            echo 'ERROR|INCORRECT_USERNAME';
        }
        /* Database connection | End */

    }
    else
    {
        echo 'ERROR|INVALID_PASSKEY';
    }
}
else
{
    echo 'ERROR|ACCESS_DENIED';
}
?>