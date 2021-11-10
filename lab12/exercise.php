<html>
    
    <head><title>Regular</title></head>
    <body>
        <form action="exercise.php" method="POST">
            <table>
                <tr>
                    <td>Enter email address</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td>Enter URL address</td>
                    <td><input type="text" name="url" required></td>
                </tr>
                <tr>
                    <td>Enter phone number</td>
                    <td><input type="text" name="number" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Check valid"></td>
                </tr>
            </table>
        </form>

        <?php
            if (isset($_POST["email"])) {
            $email = $_POST["email"];
            $url = $_POST["url"];
            $phone = $_POST["number"];
            // $reg = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'; 
            // if (preg_match($reg, $email)) {
            //     # code...
            // }

            function isDigits(string $s, int $minDigits = 9, int $maxDigits = 14): bool {
                return preg_match('/^[0-9]{'.$minDigits.','.$maxDigits.'}\z/', $s); // true or false
            }

            function isValidTelephoneNumber(string $telephone, int $minDigits = 9, int $maxDigits = 14): bool {
                if (preg_match('/^[+][0-9]/', $telephone)) { //is the first character + followed by a digit
                    $count = 1;
                    $telephone = str_replace(['+'], '', $telephone, $count); //remove +
                }
                //remove white space, dots, hyphens and brackets
                $telephone = str_replace([' ', '.', '-', '(', ')'], '', $telephone); 
            
                //are we left with digits only?
                return isDigits($telephone, $minDigits, $maxDigits); 
            }

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo $email . " is a valid email.<br>";
            } else {
                echo $email . " is an invalid email.<br>";
            }

            if (filter_var($url, FILTER_VALIDATE_URL)) {
                echo $url . " is a valid url.<br>";
            } else {
                echo $url . " is an invalid url.<br>";
            }

            if (isValidTelephoneNumber($phone)) {
                echo $phone . " is a valid  international phone number<br>";
            } else {
                echo $phone . " is an invalid  international phone number<br>";
            }
        }
        ?>
    </body>
</html>