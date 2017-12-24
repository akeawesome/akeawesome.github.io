<?php
if(isset($_SESSION['username'])){

}else{
    rdr("?page=login");
}
if($_SESSION['admin'] == "true"){

}else{
    rdr("?page=index");
}
?>
<html>
<head>
    <title>Admin</title>
    <?php require 'head.php';?>
</head>
<body>
<?php
require 'menu.php'
?>
<div class="container">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <legend><i class="fa fa-home" aria-hidden="true"></i> จัดการสินค้า</legend>
                <form action="?action=additem" method="post">
                    <div class="card">
                        <div class="card-block">
                            <p class="card-text"><input class="form-control" name="image" placeholder="ลิ้งค์รูป" required></p>
                            <p class="card-text"><input class="form-control" name="name" placeholder="ชื่อสินค้า" required></p>
                            <p class="card-text"><input class="form-control" name="price" placeholder="ราคา" required></p>
                            <p class="card-text"><input class="form-control" name="command" placeholder="give {user}" required></p>
                            <br>
                            <input type="submit" class="btn btn-success btn-block" value="เพิ่มสินค้า">
                        </div>
                    </div>
                </form>

                <hr>
                <legend>รายการสินค้า</legend>

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#sv1" data-toggle="tab" aria-expanded="true">Survival</a></li>
                </ul>
                <div id="Shop" class="tab-content">
                    <div class="tab-pane fade active in" id="sv1">
                        <br>
                        <?php $query = "SELECT * FROM `item`";
                        if($result = query($query,array("1"))) {
                            while ($row = $result->fetch()){ ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" style="height: 180px;width: 100%;display: block;" src="<?php echo $row['image'];?>" alt="Card image cap">
                                        <div class="card-block">
                                            <h4 class="card-title"><h3><strong><?php echo $row['name'];?></strong></h3></h4>
                                            <p class="card-text"><srtong class="text">ราคา</srtong> <?php echo $row['price'];?></p>
                                            <a href="?action=delitem&id=<?php echo $row['id'];?>" class="btn btn-danger btn-block <?php if($_SESSION['point']<$row['price']){}?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Delete </a><br>
                                        </div>
                                    </div>
                                </div>
                            <?php }}?>
                    </div>
                </div>

            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <legend><i class="fa fa-qrcode" aria-hidden="true"></i> จัดการไอเทมโค้ด</legend>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr class="active">
                        <th>Name</th>
                        <th>Redeem</th>
                        <th>Command</th>
                    </thead>
                    <tbody>
                    <tr class="active">
                        <form class="" action="?action=SaveRedeem" method="post">
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="Namer" placeholder="ชื่อใช้เเสดง">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="command" id="command" placeholder="คำสั่ง">
                                </div>
                            </td>
                    </tr>
                    </tbody>
                </table>
                <input type="submit" class="btn btn-warning btn-block" value="เพิ่มโค้ด">
                </form>
                <br>

                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr class="active">
                        <th>Name</th>
                        <th>Redeem</th>
                        <th>Item</th>
                    </thead>
                    <tbody>
                    <?php
                    if($result = query("SELECT * FROM `code`")) {
                        while ($row = $result->fetch()){ ?>
                            <tr class="active">
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['redeem'];?></td>
                            <td><?php echo $row['command']; ?></td>
                            </tr><?php }}?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <?php require "sidebar.php";?>
</div>
<?php include "footer.php";?>
</body>
</html>
