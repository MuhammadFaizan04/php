<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="" method="post">
            <div class="form-group">
              <label for="">Enter Email</label>
              <input type="text" name="email" id="" class="form-control" placeholder="Enter Your Email" aria-describedby="helpId">
              </div>
              <button class="btn btn-info" name="sub">Submit</button>
        </form>
    </div>
    
</body>
</html>

<?php
if(isset($_POST['sub'])){
    $userEmail = $_POST['email'];
    $restrictedDomain = "yahoo.com";
    $userEmailArray = explode ('@',$userEmail);
    // print_r($userEmailArray);
    $userEmailLastIndex = $userEmailArray[count($userEmailArray)-1];
    // echo $userEmailLastIndex . "<br>";
    $final = strcmp($userEmailLastIndex,$restrictedDomain);
    // echo $final ."<br>";
    if($final == 0){
        echo "restricted yahoo domain";

    }
    else{
        echo "allowed";
    }

}
?>