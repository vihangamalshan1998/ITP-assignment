<?php
include(config.php);
if(isset($_POST['submit'])){
    $itc = $_POST["itcode"];
    $sid = $_POST["Sid"];
    $col = $_POST["favcolor"];
    $siz = $_POST["size"];
    $qty = $_POST["qty"];
    $od = $_POST["odate"];
    $rd = $_POST["rdate"];
    $odes = $_POST["odesc"];
    $ostat = $_POST["status"];

    $sql=mysqli_query($con,"INSERT INTO order VALUES ('','itcode','sid','favcolor','size','qty','odate','rdate','odesc','status')");
    if($sql){
        echo "success!";
    }
    else{
        echo "fail!";
    }
}

?>
