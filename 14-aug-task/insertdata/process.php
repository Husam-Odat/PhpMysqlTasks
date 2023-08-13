<?php
include_once 'db.php';
if(isset($_POST['save'])){
   $productname = $_POST['productname'];
   $productcategory = $_POST['productcategory'];
   $price = $_POST['price'];
   $itemQuntity = $_POST['itemQuntity'];

   

   $sql = "INSERT INTO product (productname, productcategory, price,itemQuntity)
    VALUES ('$productname','$productcategory',$price,$itemQuntity)";

    if(mysqli_query($conn,$sql)){
        // echo "New record inserted sussefully";
        // echo '<a href="retreave.php">Go back to products Page</a>';


      echo'
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
          <div class="d-grid gap-2 col-6 ml-5 m-5">
          <a href="retreave.php"><button class="btn btn-dark" type="button">Go back to products Page</button></a>
             
          </div>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          </body>
        </html> ';
        
   


    }
    else{
        echo "error:".$sql . " ".mysqli_error($conn);
    }
  mysqli_close($conn);
}
?>
