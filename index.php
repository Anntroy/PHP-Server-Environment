<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server Environment</title>
</head>
<body>
    <?php include "header.html"?>
    <?php
        session_start();
        if((isset($_SESSION['email'])) and (isset($_SESSION['password']))){
            header('location: validate.php');
        }
    ?>
    <main>
        <article>
            <form  action="validate.php" method="post" class="modal__form" id="form">
                <div class="modal__form-div">
                    <h2 class="modal__form-div-h2">Log In</h2>
                    <hr>
                    <div>
                        <label class="modal__form-div-label" for="email"><b>Email</b></label>
                        <input class="modal__form-div-input" type="text" placeholder="Enter email" name="email" required>
                    </div>
                    <div>
                        <label class="modal__form-div-label" for="psw"><b>Password</b></label>
                        <input class="modal__form-div-input" type="password" placeholder="Enter Password" name="password" required>
                    </div>
                    <div class="clearfix">
                        <input type="reset" class="button btn cancelbtn" id="cancelbtn" value="Cancel"></input>
                        <input type="submit" class="button btn loginbtn" id="loginbtn" value="Log In"></input>
                    </div>
                </div>
            </form>
        </article>
    </main>
</body>
</html>