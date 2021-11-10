<?php
function display_classes() {
    $classes = get_declared_classes();

    foreach ($classes as $class) {
        echo "Showing information about $class \n";

        echo "$class method:<br>";
        $methods = get_class_methods($class);
        if (!count($methods)) {
            echo "<i>None </i>\n";
        } else {
            foreach ($methods as $method) {
                echo "<b> $method </b> \n";
            }
        }
        echo "$class properties: \n";
        $properties = get_class_vars($class);
        if (!count($properties)) {
            echo "<i>None </i>\n";
        } else {
            foreach ($properties as $property) {
                echo "<b> $property </b> \n";
            }
        }
        echo "\n";
    }
}

display_classes();
?>