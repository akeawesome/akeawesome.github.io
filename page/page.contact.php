<?php
if(isset($_SESSION['username'])){

}else{
    rdr("?page=login");
}
?>
<html>
<head>
    <title>Contact</title>
    <?php require 'head.php';?>
</head>
<body>
<?php
require 'menu.php'
?>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <legend><i class="fa fa-qrcode" aria-hidden="true"></i> ติดต่อ</legend>
                
            </div>
        </div>
    </div>
    <?php require "sidebar.php";?>
<?php include "footer.php";?>
</body>
</html>
