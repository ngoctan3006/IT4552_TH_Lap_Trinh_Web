<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Test</title>
</head>

<body>
    <?php
    $first = $_GET["firstName"];
    $middle = $_GET["middleName"];
    $last = $_GET["lastName"];
    print("Hi $first! Your full name is $last $middle $first. <br></br>");
    if ($first == $last) {
        echo "$first and $last are equal";
    }
    if ($first < $last) {
        echo "$first is less than $last";
    }
    if ($first > $last) {
        echo "$first is greater than $last";
    }
    echo "</br></br>";

    $grade1 = $_GET["grade1"];
    $grade2 = $_GET["grade2"];
    $final = 0.3 * $grade1 + 0.7 * $grade2;

    if ($final > 89) {
        printf("Your final grade is %.1f. You get an A. Congratulation!", $final);
        $rate = "A";
    } elseif ($final > 79) {
        printf("Your final grade is %.1f. You get an B.", $final);
        $rate = "B";
    } elseif ($final > 69) {
        printf("Your final grade is %.1f. You get an C.", $final);
        $rate = "C";
    } elseif ($final > 59) {
        printf("Your final grade is %.1f. You get an D.", $final);
        $rate = "D";
    } elseif ($final >= 0) {
        printf("Your final grade is %.1f. You get an F.", $final);
        $rate = "F";
    } else {
        printf("Illegal grade less than 0. Final grade = %.1f", $final);
        $rate = "Illegal";
    }
    echo "</br></br>";
    switch ($rate) {
        case "A":
            printf("Excellent!");
            break;
        case "A":
            printf("Good");
            break;
        case "C":
            printf("Not bad");
            break;
        case "D":
            printf("Normal");
            break;
        case "F";
            printf("You have to try again.!");
            break;
        default:
            printf("Illegal grade!");
    }
    ?>

</body>

</html>