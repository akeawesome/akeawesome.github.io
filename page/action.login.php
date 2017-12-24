<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/6/2016
 * Time: 1:03 AM
 */
?>
<html>
<head>
    <title>User</title>
    <?php require 'head.php';?>
</head>
<body>
<?php require 'menu.php';?>
<div class="col-md-3">

</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-body">
            <?php
            if($_POST){
                $user = $_POST['Username'];
                $passwd = $_POST['Password'];
                if($api->user->Login($user,$passwd)){
                
                }else{
                    
                }
            }
            ?>
        </div>
    </div>
</div>
</div>
<div class="col-md-3">

</div>
<?php require 'footer.php'?>
</body>
</html>
