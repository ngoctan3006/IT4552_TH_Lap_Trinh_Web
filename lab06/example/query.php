<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display list of product</title>
</head>
<body>
    
    <h3>Products Data</h3>
    <?php
        include('./connect.php');
        if ($connect->connect_error) {
            die("Cannot connecting to : " . $connect->connect_error);
        } else {
            $query = "SELECT * FROM $table_name";
            $result = $connect->query($query);
            
            if ($result->num_rows > 0) {
                echo "The Query is $query\n\n";
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