<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Drag and Drop table rows in PHP Mysql- ItSolutionStuff.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>



<script type="text/javascript">
    $( ".LijstBruidspaar" ).sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('.LijstBruidspaar>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    });


    function updateOrder(data) {
        $.ajax({
            url:"ajax.php",
            type:'post',
            data:{position:data},
            success:function(){
                alert('Lekker gewerkt pik!');
            }
        })
    }
</script>
</html>