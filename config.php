<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Config</title>
</head>
<body>
    <?php 
        $databaseHost = 'localhost';
        $databaseName = 'scj';
        $databaseUsername = 'root';
        $databasePassword = '';
        
        $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


         // check connection
        if (mysqli_connect_errno())
    {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
        
    ?>

</body>
</html>