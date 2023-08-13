<?php
include_once '../insertdata/db.php';
$result = mysqli_query($conn,"SELECT * FROM product");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>del product</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    
</body>
</html>
<?php
if(mysqli_num_rows($result > 0)){
    ?>
    <table>
        <tr>
            <td>id</td>
            <td>product name</td>
            <td>product category</td>
            <td>product prise</td>
            <td>product items</td>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)){
            ?>
        <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['productname'];?></td>
                <td><?php echo $row['productcategory'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['itemQuntity'];?></td>
                <td><a href="../deleteprocess.php?id=<?php echo $row["id"]; ?>">delete </a></td>
                
        </tr>
        <?php
        $i++;    
        }
        ?>
    </table>
    <?php
}
else{
    echo "no result found";

}
?>