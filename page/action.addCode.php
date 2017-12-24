 <?php
 if(isset($_SESSION['username'])){

 }else{
     rdr("?page=login");
 }

                if($_POST){
                    $redeem = $_POST['redeem'];
                    if($engine->Redeem->AddRedeem($redeem)){

                    }else{
                    }
                }



