<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert into table</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $table_name = "Products";
        $mydb = "sale";

        $itemDes = $_POST["itemDes"];
        $weight = $_POST["weight"];
        $cost = $_POST["cost"];
        $numberAvai = $_POST["numberAvai"];

        $connect = mysqli_connect($servername, $username, $password, $mydb);

        if ($connect->connect_error) {
            die("Cannot connecting to : " . $connect->connect_error);
        } else {

            $query = "INSERT INTO $table_name VALUES ('0', '$itemDes', '$weight', '$cost', '$numberAvai')";

            if ($connect->query($query)) {
                echo $query . "\n Insert into $table_name table successfully!\n";
            } else {
                echo $query . "\n Insert into $table_name table failed!\n";
            }
        }
    ?>
</body>
</html>