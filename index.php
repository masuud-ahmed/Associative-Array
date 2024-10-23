<!DOCTYPE html>
<html>
<head>
    <title>Associative Array</title>
</head>
<body>
    <h1>Associative Array</h1>

    <?php
    $person = array(
        "Id" => "C1290122",
        "Name" => "Mohamed Ali Hassan",
        "Phone" => "0706172827",
        "Dob" => "25-09-2002",
        "Sex" => "Male"
    );

    echo "<table border='1'>";
    echo "<tr><th>Index</th><th>Value</th></tr>";
    foreach ($person as $index => $value) {
        echo "<tr><td>" . $index . "</td><td>" . $value . "</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
