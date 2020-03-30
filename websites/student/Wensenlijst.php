<?php

require('db.php');
$listname = $_GET['listname'];

$sql = "SELECT * FROM wishes WHERE listname = '$listname' ORDER BY priority";
$wishes = $conn->query($sql);

?>
<!doctype html>
<html lang="en">

<head>
    <title>Happy Brides</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
          type='text/css'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="shortcut icon" type="image/x-icon" href="Afbeeldingen/x-icon.png">
</head>

<body>
<?php include("Navbar.php"); ?>

<!--Wensenlijst zichtbaar voor gasten met lijstnaam-->
<div class=container id=HeaderBruidLijst>
    <p>Wensenlijst <?php echo $_GET['listname'] ?></p>
</div>
<div class=container id="LijstBruidspaar">
    <table class="table table-bordered">
        <tr>
            <th>Cadeaus</th>
            <th></th>
        </tr>
        <tbody class="LijstBruidspaar">

        <?php while ($wish = $wishes->fetch()) : ?>
            <?php if ($wish['is_bought'] == false) : ?>
                <tr id="<?php echo $wish['list_id'] ?>">
                    <td><?php echo $wish['description'] ?></td>
                    <td>
                        <form method="post" action="BuyWish.php">
                            <input type="hidden" name="wish-id" value="<?php echo $wish['list_id'] ?>">
                            <button type="submit" name="wish-buy-button">Kopen</button>
                        </form>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>

</html>