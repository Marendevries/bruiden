<!doctype html>
<html lang="en">

<head>
    <title>Happy Brides</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
          type='text/css'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="shortcut icon" type="image/x-icon" href="Afbeeldingen/x-icon.png">
</head>

<body>
<?php include("Navbar.php"); ?>
<!--Inlogformulier voor bruidsparen-->
<div class="container login-form">
    <div class="headerlogin">
        <p>Inloggen als Bruidspaar</p>
    </div>
    <form action="Loginscript.php" method="post">
        <div id="login" class="form-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-mailadres" name="loginmail" id="name"
                               required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Wachtwoord" name="loginpass"
                               id="password" required/>
                    </div>
                </div>
            </div>
            <button type="submit" id="LoginKnop">Inloggen</button>
        </div>
    </Form>
</div>
</div>
</body>

</html>







