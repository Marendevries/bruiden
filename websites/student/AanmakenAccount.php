<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Happy Brides</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
          type='text/css'>
    <script src="jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="shortcut icon" type="image/x-icon" href="Afbeeldingen/x-icon.png">
</head>

<body>
<?php include("Navbar.php"); ?>

<!--Registratie formulier voor het aan maken van een account-->
<div class="container register-form">
    <div class="form">
        <div class="headersubmit">
            <p>Vul je gegevens in om een account aan te maken</p>
        </div>
        <form action="Server.php" method="post">
            <div id="register" class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="username *" id="name"
                                   name="username" required />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-Mail *" id="email" name="email" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Wachtwoord *" id="password"
                                   name="password_1" required />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Bevestig Wachtwoord *"
                                   id="password" name="password_2" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="listname" class="form-control" placeholder="Geef uw lijst een naam *" id="listname"
                                   name="listname" required />
                        </div>
                    </div>
                </div>
                <button class="submitknop" input type="submit" name="reg_user" id="Register">Account Aanmaken</button>
                <div class="InvulVerpl" class="row">
                    <p>* Verplicht</p>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
