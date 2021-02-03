<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Administrator Configuration</title>
</head>
<body>
    <?php
        $databaseHost = 'localhost';
        $databaseName = 'scj';
        $databaseUsername = 'root';
        $databasePassword = '';

        $mysqli = $mysqli_connect($databaseHost, $databaseName, $databaseUsername, $databasePassword);
    ?>
</body>
</html>