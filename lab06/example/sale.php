<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale table</title>
</head>
<body>
    <?php
        include './connect.php';

        if ($connect->connect_error) {
            die("Cannot connecting to : " . $connect->connect_error);
        } else {
            $radio = $_POST["myradio"];
            $query1 = "SELECT * FROM products";
            $query2 = "UPDATE products SET numb = numb - 1 where product_desc = \"$radio\" ";
            $connect->query($query2);
            $result = $connect->query($query1);

            if ($result->num_rows > 0) {
                echo '<h3 style="color: blue;">Update Results for Table Products :</h3>';
                echo "The Query is $query2\n\n";

                echo '<table><tr><th>Num</th><th>Product</th><th>Cost</th><th>Weight</th><th>Count</th></tr>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr><td>' .$row["product_id"] . '</td> <td>' .$row["product_desc"] .'</td> <td>' .$row["cost"] .'</td> <td>' .$row["weight"] .'</td> <td>' .$row["numb"] .'</td></tr>';
                    }
                    echo '</table>';
            } else {
                echo "This Query $query not working!\n";
            }
        }
    ?>
</body>
</html>