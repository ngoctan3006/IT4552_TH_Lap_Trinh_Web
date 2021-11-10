<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Convert Radians to Degrees and Vice versa!</h3>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <table>
            <br>
            <tr>
                <br>
                <td>Enter number</td>
                <td><input type="number" step="any" name="radian"/></td>
            </tr>
            <tr>
                <td><input type="radio" name="pick" value="0">Degrees</td>
                <td><input type="radio" name="pick" value="1">Radian</td>
            </tr>
            <tr>
                <td align="right"><input type="submit" name="submit" value="Submit"></td>
                <td align="left"><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    <?php
    
        if (isset($_POST["submit"])) {
            $num = $_POST["radian"];
            $pick = $_POST["pick"];

            $deg = rad2deg($num);
            $rad = deg2rad($num);
            
            switch($pick) {
                case 0 :
                    echo "<br>$num <span>&#960</span> => $deg <span>&#8451</span>";
                    break;
                case 1 :
                    echo "<br>$num <span>&#8451</span>=> $rad <span>&#960</span>";
                    break;
                default :
                    break;
            }
        }
    ?>
</body>
</html>