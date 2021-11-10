<?php
// $path_parts ='/upload';
function aasort(&$array, $key)
{
    $sorter = array();
    $ret = array();
    reset($array);
    foreach ($array as $ii => $va) {
        $sorter[$ii] = $va[$key];
    }
    asort($sorter);
    foreach ($sorter as $ii => $va) {
        $ret[$ii] = $array[$ii];
    }
    $array = $ret;
}

$data = [];
foreach (new DirectoryIterator('./upload') as $fileInfo) {
    if ($fileInfo->isDot())
        continue;
    $tmpArr = array(
        'name' => $fileInfo->getBasename(),
        'size' => $fileInfo->getSize(),
        'type' => $fileInfo->getType(),
        'date' => $fileInfo->getMTime() //date("Y-m-d H:i:s",)
    );
    array_push($data, $tmpArr);
}
$name = isset($_POST['name']) ? $_POST['name'] : false;
$date = isset($_POST['date']) ? $_POST['date'] : false;

if ($name) {
    aasort($data, 'name');
}
if ($date) {
    aasort($data, 'date');
}


?>


<table>
    <tr>
        <th>Name</th>
        <th>Size</th>
        <th>Type</th>
        <th>Date</th>
    </tr>
    <?php
    foreach ($data as $arr) {
        print "<tr>";
        $time = date("Y/m/d", $arr["date"]);
        $size = ceil($arr["size"] / 1024);
        print "<td>$arr[name]</td><td>$size KB</td><td>$arr[type]</td><td>$time</td>"; // arr[type] : file beacause arr[type] is dir
        print "</tr>";
    }
    ?>
</table>