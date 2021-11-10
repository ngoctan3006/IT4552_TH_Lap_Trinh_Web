<!DOCTYPE html>
<html>
<head>
    <title>Get User</title>
</head>
<body>

    <?php
        $q = intval($_GET['q']);

        $con = mysqli_connect('localhost','root','','lab13');
        if (!$con) {
            die('Could not connect to db');
            exit();
        }

        // mysqli_select_db($con,'lab13');
        $sql = "SELECT * FROM people WHERE id = $q";
        $result = mysqli_query($con,$sql);

        echo "<table border=1>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Hometown</th>
            <th>Job</th>
        </tr>";

        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Firstname'] . "</td>";
            echo "<td>" . $row['Lastname'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Hometown'] . "</td>";
            echo "<td>" . $row['Job'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($con);
    ?>
</body>
</html>