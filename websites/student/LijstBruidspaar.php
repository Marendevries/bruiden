<?php


require('db.php');
session_start();
$listname = $_SESSION['listname'];

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
    <!--cadeau-icon bovan aan pagina-->
    <link rel="shortcut icon" type="image/x-icon" href="Afbeeldingen/x-icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>

<body>
<?php include("Navbar.php"); ?>

<!--Hier begint de wensenlijst voor het bruidspaar -->
<div class=container id=HeaderBruidLijst>
    <p>Wensenlijst <?= $listname ?></p>
</div>
<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Beschrijving</th>
            <th>Verwijderen</th>
        </tr>
        <tbody class="LijstBruidspaar">
        <?php while ($wish = $wishes->fetch()) : ?>
            <tr id="<?php echo $wish['list_id'] ?>">
                <td><?php echo $wish['description'] ?></td>
                <td>
                    <form method="post" action="RemoveWish.php">
                        <input type="hidden" name="wish-id" value="<?php echo $wish['list_id'] ?>">
                        <button type="submit" name="wish-remove-button">Verwijderen</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

    <form action="AddItem.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Voer hier een item om toe te voegen in."
                           name="AddItem" id="name"/>
                </div>
            </div>
            <button type="submit" id="LoginKnop">Toevoegen</button>
        </div>
    </Form>
</div>

<script type="text/javascript">
    $(".LijstBruidspaar").sortable({
        delay: 150,
        stop: function () {
            var selectedData = new Array();
            $('.LijstBruidspaar>tr').each(function () {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    });


    function updateOrder(data) {
        $.ajax({
            url: "ajax.php",
            type: 'post',
            data: {position: data},
            success: function () {
            }
        })
    }
</script>

</html>
