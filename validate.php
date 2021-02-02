<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Validate</title>
</head>
<body>
    <?php
        session_start();

        $email = array('green@gmail.com', 'red@gmail.com', 'yellow@hotmail.es');
        $password = array('23green1', '23red1', '23yellow1');
        $users = array_combine($email, $password);
        $emailExist = false;
        $passwordExist = false;

        if((!isset($_SESSION['email'])) and (!isset($_SESSION['password']))){

            foreach ($users as $email => $password) {
                if($_POST['email'] == $email){
                    $emailExist = true;
                    if($_POST['password'] == $password){
                        $passwordExist = true;
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['password'] = $_POST['password'];
                    }
                }
            }
        } else {
            header('location: panel.php');
        }
        if (!$emailExist){
            header('Refresh:3; url=index.php');
            echo "<article><form class='modal__form'><div class='modal__form-div'><h2 class='modal__form-div-h2 error'>Error</h2><hr><div><label class='modal__form-div-label error'><b>Please, enter correct email!</b></label></div></div></form></article>";
        }
        elseif (($emailExist) and (!$passwordExist)) {
            header('Refresh:3; url=index.php');
            echo "<article><form class='modal__form'><div class='modal__form-div'><h2 class='modal__form-div-h2 error'>Error</h2><hr><div><label class='modal__form-div-label error'><b>Please, enter correct password!</b></label></div></div></form></article>";
        }
        else {
            header('location: panel.php');
        }
    ?>
</body>
</html>