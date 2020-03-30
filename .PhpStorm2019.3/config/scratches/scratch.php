<?php



Welcome <?php echo $_POST["titel"]; ?><br>
Product toevoegen: <?php echo $_POST["titel"];
?>

<html>
<body>

<form method="post">
    <table border="1" align="left"  >
        <tr>
            <th>Naam:</th>
            <th><input type="text" minlength="3" maxlength="50"  name="naam"/></th>
        </tr>
        <tr>
            <th>Beschrijving:</th>
            <th><input type="text" maxlength="2048" name="beschrijving"/></th>
        </tr>
        <tr>
            <th>Prijs:</th>
            <th><input type="float" decimals="2" name="prijs"/></th>
        </tr>
        <tr>
            <th>Categorie:</th>
            <th><input type="text"  name="categorie"/></th>
        </tr>
        <tr>
            <th>Email:</th>
            <th><input type="text"  name="email"/></th>
        </tr>
        <tr>
            <th>Uitverkocht:</th>
            <th><input type="radio" name="uitverkocht" value="Ja">Ja
                <input type="radio" name="uitverkocht" value="Nee">Nee </th>
        </tr>
        <tr>

            <th><button><input type="submit"></button></th>
        </tr>

</form>


</body>
</html>