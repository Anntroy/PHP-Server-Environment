<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Close session</title>
</head>
<body>
    <?php include "header.html";
        session_start();
    ?>
    <?php
        session_destroy();
        header('location: index.php');
    ?>
</body>
</html>