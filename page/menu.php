<nav class="navbar navbar-default">
    <div class="container-fluid">
        <?php
        if(isset($_SESSION['username'])){
            ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="?page=index">Home</a></li>
                <li><a href="?page=payment">Payment</a></li>
                <li><a href="?page=shop">Shop</a></li>
                <li><a href="?page=redeem">Item Code</a></li>
                <li><a href="?page=contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if($_SESSION['admin'] == "true"){
                ?>
                    <li><a href="?page=backend">ระบบจัดการหลังร้าน</a></li>
                <?php
                }
                ?>
                <li><a href="#">Point: <?php echo $_SESSION['point'];?></a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['username'];?> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="?page=logout">Logout</a></li>
            </ul>
        </li>
        </ul>
    </div>
        <?php
        }else{

        }
        ?>


    </div>
</nav>