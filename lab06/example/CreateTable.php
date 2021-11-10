<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $table_name = "Products";
        $mydb = "sale";
        
        $connect = mysqli_connect($servername, $username, $password, $mydb);

        if ($connect->connect_error) {
            die("Cannot connecting to : " . $connect->connect_error);
        } else {
            $SQLcmd = "CREATE TABLE $table_name(
                product_id int UNSIGNED AUTO_INCREMENT,
                product_desc varchar(50),
                cost int,
                weight int,
                numb int,
                PRIMARY KEY(product_id)
            );";
            if($connect->query($SQLcmd) === TRUE){
               echo 'Create table successfully! <br>';
               print '<font size="4" color ="blue" >Created Table';
                print "<i>$table_name</i> in database<i>$mydb</i><br></font>";
                print "<br>SQLcmd=$SQLcmd";
            }
            else echo"Error creating table " . $connect->connect_error;
        }
    ?>
</body>
</html>