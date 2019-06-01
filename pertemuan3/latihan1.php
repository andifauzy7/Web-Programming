<!DOCTYPE html>
<html>
    <head>
        <title>Mix PHP + HTML</title>
    </head>
    <body>
        <table border="1">
            <?php for($i=1;$i<=3;$i++):?>
                <tr>
                    <?php for($j=1;$j<=5;$j++):?>
                        <td><?php echo("$i,$j");?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </body>
</html>