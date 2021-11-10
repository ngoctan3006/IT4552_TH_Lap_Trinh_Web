<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Administration</title>
</head>
<body>
    <h1>Category Administration</h1>
    <form action="admin.php" method="POST">
        <?php
            $server = 'localhost';
            $username = 'root';
            $password = '';
            $db = 'business_service';
            $table_name = 'Categories';

            $connect = mysqli_connect($server, $username, $password, $db);

            if ($connect->connect_error) {
                die("Cannot connecting to : " . $connect->connect_error);
                exit();
            } else {
                if (isset($_POST['cartID'])){
                    $cartID = $_POST['cartID'];
                    if (strlen($cartID) > 0) {
                        $description = $_POST['description'];
                        $title = $_POST['title'];
                        $insert_sql = "INSERT INTO $table_name VALUES('$cartID', '$title', '$description')";

                        if (!$connect->query($insert_sql)) {
                            echo "Insert into DB failed!\n";
                        }
                    }
                }

                $sql = "SELECT * FROM $table_name";
                $connect->select_db($db);
                $result = $connect->query($sql);

                if ($result) {
                    echo '<table>';
                    echo '<th>Cart ID<th>Title<th>Description';

                    while($row = mysqli_fetch_row($result)) {
                        echo '<tr>';
                        foreach($row as $record) {
                            echo "<td>$record</td>";
                        }
                        echo '</tr>';
                    }
                } else {
                    die ("Taking query failed! query = $sql");
                }
            }
        ?>
        <tr>
            <td><input type="text" name="cartID" size="20"></td>
            <td><input type="text" name="title" size="40"></td>
            <td><input type="text" name="description" size="50"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Add category"></td>
        </tr>
        <?php $connect->close(); ?>
    </form>
</body>
</html>