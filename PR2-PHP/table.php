<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
              <input type="text"
                class="form-control" name="tableNumber" id="" aria-describedby="helpId" placeholder="Enter Number">
            </div>
            <button class="btn btn-info" name="sub">Submit</button>
        </form>
    </div>

    <?php
    if(isset($_POST['sub'])){
        $inpVal = $_POST['tableNumber'];
        ?>
        <table class="table table-striped">
           
            <tbody>
                <?php
                for($i=1;$i<=10;$i++){
                    ?>
                    <tr>
                    <td scope="row"><?php echo $inpVal?></td>
                    <td><?php echo 'x'?></td>
                    <td><?php echo $i?></td>
                    <td><?php echo '='?></td>
                    <td><?php echo $i*$inpVal?></td>
                </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>

<?php
    }
    ?>
    
</body>
</html>