<html>

<head>
    <title>Distance and Time Calculation</title>
</head>

<body>
    <?php
    $cities = array('Dallas' => 803, 'Boston' => 848, 'Miami' => 1189, 'Nashville' => 406, 'Las Vegas' => 1526, 'Pittsburgh' => 409, 'Toronto' => 435);
    $des = $_GET['destination'];
    if (isset($cities[$des])) {
        $distance = $cities[$des];
        $time = round(($distance / 60), 2);
        $walktime = round(($distance / 5), 2);
        print "The distance between Chicago and <i>$des</i> is $distance miles.<br>";
        print "Driving at 60 miles per hour it would take $time hours. <br>";
        print "Walking at 5 miles per hour it would take $walktime hours.<br>";
    } else {
        print "Sorry, do not have destination information for <i>$des</i>.<br>";
    }
    ?>
</body>

</html>