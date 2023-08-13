<?php
include_once '../insertdata/db.php';
$sql = "DELETE FROM product WHERE id ='".$_GET["id"]. "'";
if(mysqli_query($conn,$sql)){
    echo "record del succ";
}else{
    echo "error del rec" .mysqli_error($conn);
} 
mysqli_close($conn);
?>