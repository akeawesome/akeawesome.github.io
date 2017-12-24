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
            <legend>เติมเงิน</legend>
            <script type="text/javascript" src="https://www.tmtopup.com/topup/3rdTopup.php?uid=153895"></script>
            <div class="col-md-7">
                <div class="form-group">
                    <label class="control-label" for="tmn_password"><strong>ทรูมันนี้</strong></label>
                    <input style="text-align: center; font-size:18px; letter-spacing:2px" type="text" name="tmn_password" id="tmn_password" class="form-control" min="14" maxlength="14" placeholder="T R U E M O N E Y">
                </div>
                <div class="form-group">
                    <input class="form-control" style=" text-align: center; font-size:18px; letter-spacing:2px" type="hidden" id="ref2" value="Form_web" maxlength="50">
                </div>

                <div class="form-group">
                    <input class="form-control" style="text-align: center; font-size:18px; letter-spacing:2px" type="hidden" id="ref1" value="<?php echo strtolower($_SESSION['username']);?>" maxlength="50">
                </div>
                <div class="form-group">
                    <input  class="form-control" style=" text-align: center; font-size:18px; letter-spacing:2px" type="hidden" id="ref3" value="Form_web" maxlength="50">
                </div>
                <button class="btn btn-success" onclick="submit_tmnc()">ดำเนินการเติมเงิน</button>
            </div>
            <div class="col-md-5">
                <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th>Truemoney</th>
                        <th>Point</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        <td>50</td>
                        <td>50</td>
                    </tr>
                    <tr>

                        <td>90</td>
                        <td>90</td>
                    </tr>
                    <tr >

                        <td>150</td>
                        <td>150</td>
                    </tr>
                    <tr>

                        <td>500</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>1,000</td>
                        <td>1,000</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require "sidebar.php";?>
<?php include "footer.php";?>
</body>
</html>
