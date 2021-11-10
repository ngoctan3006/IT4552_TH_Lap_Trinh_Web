<html>

<head>
    <title>Distance from Chicago</title>
</head>

<body>
    <span>The page that calculates the distance from Chicago</span>
    <br><br>
    <span>Select a destination :</span>
    <br><br>
    <form action="./check_distance.php" method="GET">
        <select name="destination" size=5 mulitple>
            <option>Boston</option>
            <option>Dallas</option>
            <option>Miami</option>
            <option>Nashville</option>
            <option>Las Vegas</option>
            <option>Pittsburgh</option>
            <option>Toronto</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>

</html>