<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time Processing Exercise</title>
</head>
<body>
    <h3>Năm nhuận :</h3><br>
    <span>Enter your name and select and time for the apppointment</span><br></br>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <table>
            <tr>
                <td>Your name</td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="date" name="date" value="<?php echo date("d-m-Y"); ?>"></td>
            </tr>
            <tr>
                <td>Time</td>
                <td><input type="time" step="1" name="time"></td>
            </tr>
            <tr>
                <td align="right"><input type="submit" name="submit" value="Submit"></td>
                <td align="left"><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    <br>
    <?php 
        if(isset($_POST["submit"])) {
            $name = $_POST["name"];
            $date = $_POST["date"]; 
            $time = $_POST["time"];
            echo "Hi, $name! <br><br>";
            echo "You have choose to have an appointment on $time , " .date('d/m/Y', strtotime($date)) .  "<br><br>";
            echo "More information <br><br>";
            echo "In 12 hours, the time and date is " .date('h:i:s A', strtotime($time))  . " " .date('d/m/Y', strtotime($date)).   "<br><br>";
            $month = date('m', strtotime($date));
            $year = date('y', strtotime($date));
            switch ($month) {
                case 1 : 
                case 3 : 
                case 5 : 
                case 7 : 
                case 8 : 
                case 9 : 
                case 10 : 
                    $days = 31;
                    break;
                case 4 :
                case 6 :
                case 9 :
                case 11 :
                    $days = 30;
                    break;
                case 2 :
                    if ($year % 400 == 0 || $year % 4 == 0) {
                        $days = 29;
                    } elseif ($year % 100 == 0){
                        $days = 28;
                    } else $days = 28;
                    break;
                default :
                    echo "<br>Invalid";
                    break;
            }
            echo "This month has $days days!";
        }
    ?>
</body>
</html>

