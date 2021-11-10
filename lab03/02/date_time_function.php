<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time Fuction</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <h4>First User</h4>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name1" /></td>
            </tr>
            <tr>
                <td>Birthday</td>
                <td><input type="date" name="date1"></td>
            </tr>
        </table>
        <br>
        <h4>Second User</h4>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name2" /></td>
            </tr>
            <tr>
                <td>Birthday</td>
                <td><input type="date" name="date2"></td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td align="right"><input type="submit" name="submit" value="Submit"></td>
                <td align="left"><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>

    <?php
    function dateDiffInDays($date1, $date2)
    {
        $diff = strtotime($date1) - strtotime($date2);
        return abs(round($diff / 86400));
    }
    function getDiffYear($date1, $date2)
    {
        $d1 = date('Y', strtotime($date1));
        $d2 = date('Y', strtotime($date2));
        $years = abs($d1 - $d2);
        return $years;
    }

    if (isset($_POST["submit"])) {
        $name1 = $_POST["name1"];
        $date1 = $_POST["date1"];
        $name2 = $_POST["name2"];
        $date2 = $_POST["date2"];
        $now = date('d-m-Y');
        echo "<br>Hi, $name1 <br> DOB : " . date('D,d m, Y', strtotime($date1)) . "<br>Age : " . date_diff(date_create($date1), date_create('now'))->y . " <br>";
        echo "<br>Hi, $name2 <br> DOB : " . date('D,d m, Y', strtotime($date2)) . "<br>Age : " . date_diff(date_create($date2), date_create('now'))->y . "<br>";
        echo "<br>The differences in days between " . date('d/m/Y', strtotime($date1)) . " and " . date('d/m/Y', strtotime($date2)) . " is " . dateDiffInDays($date1, $date2) . " days<br>";
        echo "<br>The differences years between two person is " . getDiffYear($date1, $date2) . " years<br>";
    }
    ?>

</body>

</html>