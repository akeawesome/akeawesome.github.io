<?php
if(isset($_SESSION['username'])){

}else{
    rdr("?page=login");
}
?>
<html>
<head>
    <title>Redeem</title>
    <?php require 'head.php';?>
</head>
<body>
<?php
require 'menu.php'
?>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <legend><i class="fa fa-qrcode" aria-hidden="true"></i> ไอเทมโค้ด</legend>
                <form class="form-group" action="?action=Redeem" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" maxlength="16" name="redeem" placeholder="Redeem">
                    </div>
                    <input type="submit" class="btn btn-warning btn-block" value='ตกลง'>

                </form>
            </div>
        </div>
    </div>
    <?php require "sidebar.php";?>
<?php include "footer.php";?>
</body>
</html>
