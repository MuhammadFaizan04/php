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
    ["hassan" , 23 , "karachi"]
];
//var_dump($allStudents);
//echo "<br>";
?>

<!-- <h1>Hello</h1> -->
<?php
//print_r($allStudents);
?>

<table border = "1px">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach($allStudents as $std){
            ?>
            <tr>
                <td><?php echo $std[0]?></td>
                <td><?php echo $std[1]?></td>
                <td><?php echo $std[2]?></td>
            </tr>

            <?php
        }
        ?>

    </tbody>
</table>

<h2>By for loop</h2>
<table border = "1px">
<thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
        </tr>
    </thead>

    <tbody>
        <?php
        for($i=0;$i<count($allStudents);$i++){
            ?>

            <tr>
                <td><?php echo $allStudents[$i][0] ?></td>
                <td><?php echo $allStudents[$i][1]?></td>
                <td><?php echo $allStudents[$i][2]?></td>
            </tr>

            <?php
        }
        ?>
    </tbody>
</table>
    
</body>
</html>