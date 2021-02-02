<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>
<body>
    <?php include "header.html"?>
    <?php
        session_start();
    ?>
    <?php
        $current_email = $_SESSION['email'];
        echo "<article><form  action='close_session.php' method='post' class='modal__form' id='form'><div class='modal__form-div'><h2 class='modal__form-div-h2'>Welcome</h2><hr><div><label class='modal__form-div-label'><b>User email: $current_email</b></label></div><div class='clearfix'><input type='submit' class='button btn logoutbtn'value='Log Out'></input></div></div></form></article>";
    ?>
</body>
</html>