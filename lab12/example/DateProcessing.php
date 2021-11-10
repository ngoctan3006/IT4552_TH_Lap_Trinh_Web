<html>
    <head>
        <title>Date Check</title>
    </head>
    <body>
        <?php

            $date = $_POST["date"];
            $two = '[[:digit:]]{2}';
            $month = '[0-1][[:digit:]]';
            $day = '[0-3][[:digit:]]';
            $year = "2[[:digit:]]$two";
            if (mb_ereg("^($month)/($day)/($year)$", $date)) {
                print "Valid date = $date \n";
            } else {
                print "Invalid date = $date \n";
            }
        ?>
    </body>
</html>