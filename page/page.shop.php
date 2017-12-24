<?php
if(isset($_SESSION['username'])){

}else{
    rdr("?page=login");
}
?>
<html>
<head>
    <title>Shop</title>
    <?php require 'head.php';?>
</head>
<body>
<?php
require 'menu.php'
?>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">

                <legend><i class="fa fa-shopping-cart" aria-hidden="true"></i> ร้านค้า</legend>
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
                                            <a href="?action=shop&id=<?php echo $row['id'];?>" class="btn btn-success btn-block <?php if($_SESSION['point']<$row['price']){ echo "disabled";}?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a><br>
                                        </div>
                                    </div>
                                </div>
                            <?php }}?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php require "sidebar.php";?>
    <?php include "footer.php";?>
</body>
</html>
