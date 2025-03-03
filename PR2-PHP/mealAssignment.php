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
            <label for="">Select Day</label>
            <select class="form-group" name="selectDay" id="">
                <option value="">Select Day</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>
            <button class="btn btn-info" name="sub">Submit</button>
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['sub'])){
    $selectDay = $_POST['selectDay'];
    switch ($selectDay) {
        case 'Monday':
            echo "Your Monday Meal is Biryani";
            break;
        case 'Tuesday':
                echo "Your Tuesday Meal is Sabzi";
                break;
        case 'Wednesday':
                    echo "Your Wednesday Meal is Pizza";
                    break;
        case 'Thursday':
                        echo "Your Thursday Meal is Daal Chawal";
                        break;
        case 'Friday':
                            echo "Your Friday Meal is Qeema";
                            break;
        case 'Saturday':
                                echo "Your Suturday Meal is BBQ";
                                break;
         case 'Sunday':
          echo "Your Sunday Meal is Burger";
                 break;

         default:
             echo "None";
             break;
    }

}
?>