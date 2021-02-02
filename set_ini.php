<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server Environment Home</title>
</head>
<body>
    <?php
        set_time_limit(60);
        date_default_timezone_set('Europe/Madrid');
        session_start();

        $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['time'] = time();
        echo '<pre>';
        print_r($_SESSION);
        $inipath = php_ini_loaded_file();
        echo $inipath;
    ?>
</body>
</html>