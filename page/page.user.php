<?php
if(isset($_SESSION['username'])){
    rdr("?page=index");
}else{

}

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
            <ul class="nav nav-tabs">
                <li class="active"><a href="#login" data-toggle="tab" aria-expanded="true">Login</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="login">
                    <br>
                    <form class="form-group" name="login_form" id="login_form" method="post" action="?action=login">
                        <div class="demelogin"></div>
                        <div class="form-group">
                            <label class="control-label" for="Username">ชื่อในเกมส์</label>
                            <input type="text" class="form-control" name="Username" id="Username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="Password">รหัสผ่าน</label>
                            <input type="password" class="form-control" name ="Password" id="Password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" value="เข้าสู่ระบบ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3">

</div>
<?php require 'footer.php'?>
</body>
</html>
