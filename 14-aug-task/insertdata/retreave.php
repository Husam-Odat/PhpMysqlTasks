<?php

// include_once '../deletedata/deleteprocess.php';
include_once 'insert.php';
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * from product");

$sql = "DELETE FROM product WHERE id ='".$_GET["id"]. "'";
mysqli_query($conn,$sql)
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (mysqli_num_rows($result) > 0){
        ?>
        <div style="margin:10%;">
        <table class="table table-striped table-hover">
            <tr>
                <td>product id</td>
                <td>product name</td>
                <td>product category</td>
                <td>product price</td>
                <td>product items</td>
                <td>Time Update</td>
                <td>Update</td>
                <td>Delete</td>
                        
            
            </tr>
            
           <?php
           $i = 0;
           //mysqli_fetch_array($result ,resulttype) index by num 
           while($row = mysqli_fetch_array($result)){
            ?>
            
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['productname'];?></td>
                <td><?php echo $row['productcategory'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['itemQuntity'];?></td>
                <td><?php echo $row['reg_date'];?></td>
                <td><a href="../updatedata/updateprocess.php?id=<?php echo $row['id']?>">
                
                <div class="d-grid gap-2 col-6 ml-5 mb-5">
                <button class="btn btn-success" type="button">Update</button>
                </div>
                </td>

                <td><a href="retreave.php?id=<?php echo $row['id']?>">
                
                <div class="d-grid gap-2 col-6 ml-5 mb-5">
                <button class="btn btn-danger" type="button">Delete</button>
                </div>
            </td>
            </tr>
            <?php
            $i++;
           }
           ?>
           </table>
           </div>
           <?php
    }
    else{
        echo "no result found";
        
    }
    ?>

           

    
</body>
</html>