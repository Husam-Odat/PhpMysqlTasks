<?php
include_once '../insertdata/db.php';
if(count($_POST)>0){
    if(isset($_POST['submit'])){
        $name = $_POST['productname'];
        $categ = $_POST['productcategory'];
        $price = $_POST['price'];
        $item = $_POST['itemQuntity'];
        $id = $_GET['id'];
        // $sql = "UPDATE product set productname ='$name', productcategory='$categ', price=$price ,itemQuntity=$item WHERE id = $_GET['id']";
        $sql = "UPDATE product SET productname = '$name', productcategory = '$categ', price = $price, itemQuntity = $item WHERE id = $id";
    mysqli_query($conn,$sql);
    $messege = "record modified success";
}
}

$result = mysqli_query($conn,"SELECT *FROM product WHERE id='".$_GET['id']."'");
$row = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- As a link -->
<nav class="navbar bg-dark bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Update Page</a>
  </div>
</nav>

  
    


<div style="width: 60%; margin:10% 30%;" >
<div class="input-group input-group-sm mb-5">




<form name="frmupdate" method="post" action="">

<div class="d-grid gap-2 col-6 ml-5 mb-5">
<a href="../retreavedata/retreave.php"><button class="btn btn-dark" type="button">Product list</button></a>
   
</div>

        <div><?php if(isset($message)) { echo $message; } ?>

<!-- ============================================== -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">product name   :</span>
  </div>
  <input type="hidden" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="id" class="txtField" value="<?php echo $row['id'];?>">
    <input type="text"class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="productname"  value="<?php echo $row['productname'];?>">
  
</div>
<!-- ==================================================== -->
<!-- ============================================== -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">product category   :</span>
  </div>
  
  <input type="text"class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="productcategory"  value="<?php echo $row['productcategory'];?>">
</div>
<!-- ==================================================== -->
<!-- ============================================== -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">product price     :</span>
  </div>
  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="price"  value="<?php echo $row['price'];?>">
  <span class="input-group-text">JOD</span>
</div>
<!-- ==================================================== -->
<!-- ============================================== -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">product items     :</span>
  </div>
  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="itemQuntity"  value="<?php echo $row['itemQuntity'];?>">
  <span class="input-group-text">#</span>
</div>
<!-- ==================================================== -->


</div>
<div class="d-grid gap-2 col-6 ml-5">
  
<input type="submit"class="btn btn-success" name="submit" value="submit" class="botton">
</div>
</form>
</div> 




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>