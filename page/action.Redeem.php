<?php
if($_SESSION['admin'] == "true"){

}else{
rdr("?page=index");
}
?>
<html>
<head>
    <title>Redeem</title>
    <?php require 'head.php';?>
</head>
<body>
<?php
require 'menu.php';
?>
<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php
                if($_POST){
                    $redeem = $_POST['redeem'];
                    if($api->redeem->AddRedeem($redeem)){

                    }else{
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";?>
</body>
</html>



