<html>

<head>
    <title>User Sorting</title>
    <style>
        * {
            box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 50%;
            padding: 10px;
            height: 300px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body>

    <?php

    function user_sort($a, $b)
    {
        // smarts is all - important, so sort it first
        if ($b == 'smarts') {
            return 1;
        } else if ($a == 'smarts') {
            return -1;
        }
        return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
    }

    $example = array(
        'name' => 'Buzz Lightyear',
        'email' => 'buzz@starcommand.gal',
        'age' => 32,
        'smarts' => 'some'
    );

    $values = array(
        'name' => 'Buzz Lightyear',
        'email' => 'buzz@starcommand.gal',
        'age' => 32,
        'smarts' => 'some'
    );
    if (isset($_POST["submit"])) {
        $sort_type = $_POST["sort_type"];
        $submitted = $_POST["submit"];
    }

    if (!empty($submitted)) {
        if ($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
            $sort_type($values, 'user_sort');
        } else {
            $sort_type($values);
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <table>
            <tr>
                <br>
                <td><input type="radio" name="sort_type" value="sort" />Standard sort </td><br>
                <td><input type="radio" name="sort_type" value="rsort" /> Reverse sort</td>
                <td><input type="radio" name="sort_type" value="usort" /> User-defined sort</td>
            </tr>
            <tr>
                <td><input type="radio" name="sort_type" value="ksort" /> Key sort</td>
                <td><input type="radio" name="sort_type" value="krsort" /> Reverse key sort</td>
                <td><input type="radio" name="sort_type" value="uksort" /> User-defined key sort</td>
            </tr>
            <tr>
                <td><input type="radio" name="sort_type" value="asort" /> Value sort</td>
                <td><input type="radio" name="sort_type" value="arsort" /> Reverse value sort</td>
                <td><input type="radio" name="sort_type" value="uasort" />User-defined value sort</td>
            </tr>
        </table>
        <p>
            <input type="submit" name="submit" value="Sort" />
            <input type="reset" value="Reset" />
        </p>
    </form>

    <div class="row">
        <div class="column" style="background-color:#aaa;">
            <p>Values unsorted (before sort) : </p>
            <ul>
                <?php
                foreach ($example as $key => $value) {
                    print "<pre><li><b>$key</b>\t: $value </li></pre>";
                }
                ?>
            </ul>
        </div>
        <div class="column" style="background-color:#bbb;">
            <p>Values <? $submitted ? "sorted by $sort_type" : "unsorted"; ?> : </p>
            <ul>
                <?php
                foreach ($values as $key => $value) {
                    print "<pre><li><b>$key</b>\t: $value </li></pre>";
                }
                ?>
            </ul>
        </div>
    </div>

</body>

</html>