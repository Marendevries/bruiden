<!doctype html>
<html lang="en">

<head>
    <title>Happy Brides</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="shortcut icon" type="image/x-icon" href="Afbeeldingen/x-icon.png">
</head>

<body>
<?php include("Navbar.php"); ?>

    <!--E-mail formulier-->
    <div class="container register-form">
        <div class="form">
            <div class="headersubmit">
                <p>Heeft u een vraag? Neem contact met ons op via dit formulier.</p>
            </div>
            <div id="register" class="form-content" ;>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="ContactVeld" placeholder="Naam & Voornaam*" id="name" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="ContactVeld" placeholder="E-Mailadres *" id="email" />
                        </div>
                    </div>
                    <select id="Vraagkeuze" name="VraagKeuze">
                        <option>Ik heb problemen met registreren.</option>
                        <option>Ik heb problemen met inloggen.</option>
                        <option>De Unieke Code die ik gekregen heb werkt niet.</option>
                        <option>Ik heb problemen met de wensenlijst.</option>
                        <option>Ik heb een andere vraag.</option>
                    </select>
                    <div>
                        <div class="form-group">
                            <textarea id="Vraagvak" name="vraag" placeholder="Schrijf hier uw vraag."></textarea>
                        </div>
                    </div>
                </div>
                <button type="button" id="VerzendKnop">Versturen</button>
                <div class="InvulVerpl" class="row">
                    <p>* Verplicht</p>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>


</body>

</html>