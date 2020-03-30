<html>
<head>
    <title>Hello World (Student)</title>
</head>
<body>



<?php

$ch = null;
$fn = null;
$sn = null;
$res = null;

if (isset($_POST['calculate']))
{
    $ch = $_POST['ch'];
    $fn = $_POST['fn'];
    $sn = $_POST['sn'];

    switch($ch)
    {
        case '+':
            $res=$fn+$sn;
            break;

        case '-':
            $res=$fn-$sn;
            break;

        case '*':
            $res=$fn*$sn;
            break;

        case '/':
            $res=$fn/$sn;
            break;
    }

}
/* poging tot maken van reset
if($reset)
{

}
*/

?>


<!DOCTYP html>
<html>
<head>
    <title>Calculator- switch  </title>

</head>
<body>
<form method="post">
    <table border="1" align="center">
        <tr>
            <th>Your Result</th>
            <th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/></th>
        </tr>

        <tr> <!-- type number is belangrijk, zodat je alleen nummers kunt invoeren. -->
            <th>Enter your First num</th>
            <th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
        </tr>
        <tr>
            <th>Enter your Second num</th>
            <th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
        </tr>
        <tr>
            <th>Select Your Choice</th>
            <th>
                <select name="ch">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
            </th>
        </tr>
        <tr>

            <th colspan="2">
                <button type="submit"
                       name="calculate">Show result</button>
            </th>
        </tr>
            </table>
</form>
<form>
<table border="1" align="center">

        <th colspan="2">
            <button type="submit"
                    name="reset">Reset</button>
        </th>

</table>
</form>
<?
?>
</body>
</html>