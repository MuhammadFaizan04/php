<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$allStudents = [
    ["ali" , 20 , "karachi"],
    ["hamza" ,25 , "lahore"],
    ["hassan" , 23 , "karachi" , "hassan@gmail.com"]
];
?>
<h2>By for loop</h2>
<table border = "1px">
<thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>
        <?php
        for($i=0;$i<count($allStudents);$i++){
            ?>

           <tr>
            <?php
            for($j=0 ; $j<count($allStudents[$i]) ; $j++){

                ?>
                <td><?php echo $allStudents[$i][$j]?></td>

                <?php
            }
            ?>
           </tr>

            <?php
        }
        ?>
    </tbody>
</table>



    
</body>
</html>