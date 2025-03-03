<?php
include("query.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container p-5 mt-5">
        <form action="" method="post">
            <div class="form-group">
             

            <div class="form-group">
              <label for="">Email</label>
              <input type="text" value="<?php echo $userEmail?>" name="uEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-danger"><?php echo $userEmailErr?></small>
            </div>

            <div class="form-group">
              <label for="">Password</label>
              <input type="text" value="<?php echo $userPassword?>" name="uPassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-danger"><?php echo $userPasswordErr?></small>
            </div>

            <button name="userLogin" class="btn btn-info">Login</button>
        </form>
    </div>
    
</body>
</html>