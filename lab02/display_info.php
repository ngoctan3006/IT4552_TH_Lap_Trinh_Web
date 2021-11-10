<!DOCTYPE html>
<html>
    <title>PHP Input Form</title>
    <head>
        <style>
            body {
                font-size: 20px;
            }
            
            ul {
                list-style: none;
            }

            input {
                padding: 10px;
                margin: 3px;
                border-color: 3px;
                outline-color: blueviolet;
            }

            input {
                margin-left: 10px;
            }

            .hobby {
                margin-left: 57px;
            }

            .submit {
                padding: 0.35em 1.2em;
                margin-left: 67px;
                margin-top: 1.8rem;
                text-align: center;
                transition: all 0.2s;
            }

            .submit:hover {
                color: blueviolet;
            }

            .column {
                float: left;
                width: 50%;
            }
        </style>
    </head>
    <?php 
    $name = $phone = $class = $school = $gender = "";
    ?>
    <body>
        <div class="row">
            <div class="column">
            <h3> PHP Input Form Exercise</h3>
                <form action="" method="post">
                    <ul>
                        <li>
                            Name <input type="text" name="your_name" id="name" value="<?php if(isset($_POST["your_name"])) echo $name = $_POST["your_name"]; ?>">
                        </li>
                        <li>
                            Phone <input type="text" name="your_phone" id="phone" value="<?php if(isset($_POST["your_phone"])) echo $phone = $_POST["your_phone"]; ?>">
                        </li>

                        <li>Class &nbsp;<input type="text" name="your_class" id="your_class" value="<?php if(isset($_POST["your_class"])) echo $class = $_POST["your_class"]; ?>">
                        </li>

                        <li>School<input type="text" name="your_school" id="your_school" value="<?php if(isset($_POST["your_school"])) echo $school = $_POST["your_school"]; ?>"></li>
                        
                        <li style="margin-top: 10px;">Gender  
                            <input type="radio" name="gender" id="gender" value="Female" <?php if (isset($_POST["gender"])) echo $gender = $_POST["gender"];?>>Female
                            <input type="radio" name="gender" id="gender" value="Male" <?php if (isset($_POST["gender"])) echo $gender = $_POST["gender"];?>>Male
                            <input type="radio" name="gender" id="gender" value="Other" <?php if (isset($_POST["gender"])) echo $gender = $_POST["gender"];?>>Other
                        </li>

                        <li style="margin-top: 10px;">Hobby 
                            <div class="hobby">
                                <input type="checkbox"value="Dance" name="hobby[]">
                                    <label for="hob1">Dance</label>
                                <br>
                                <input type="checkbox"value="Volunteer" name="hobby[]">
                                    <label for="hob1">Volunteer</label>
                                    <br>
                                <input type="checkbox"value="Research" name="hobby[]">
                                    <label for="hob1">Research</label>
                                    <br>
                                <input type="checkbox"value="Food Review" name="hobby[]">
                                    <label for="hob1">Food Review</label>
                                    <br>
                                <input type="checkbox"value="Travel" name="hobby[]">
                                    <label for="hob1">Travel</label>
                                    <br>
                            </div>
                        </li>
                        <input class="submit" type="submit" name="submit" value="Submit"></input>
                    </ul>
                </form>
            </div>
            <div class="column">
                <h3> About you</h3>
                <?php
                if(isset($_POST["submit"])){
                    echo "Hello,  $name <br>";
                    echo "Gender: $gender<br>";
                    echo "You are studying at $class , $school<br>";
                    echo "Your phone number is $phone<br>";
                    if (!empty($_POST['hobby'])) {
                        echo 'Hobby: ';
                        foreach($_POST['hobby'] as $value) {
                            echo $value .',';
                        }
                    }
                }
            ?>
            </div>
        </div>
    </body>
</html>