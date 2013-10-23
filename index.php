<!DOCTYPE html>
<html>
    <head>
        <title>practice PHP</title>
        <meta charset="utf-8" />
        <?php require_once('logic.php');?>

        <link href="default.css" rel="stylesheet" type="text/css" media="screen">
    </head>

    <body>
    <form action = 'index.php' method='POST'>
        <input type="text" name="Player1"><br>
        <input type="text" name="Player2"><br>
        <input type="text" name="Player3"><br>
        <input type="text" name="Player4"><br>
        <input type="Submit"><br>
    </form>

    <table>
    <?php foreach($contestants as $key => $value):?>
    <tr>
        <td><?=$key?> </td>
        <td><?=$value?></td>
    </tr>
    <?php endforeach;?>
    </table>
    </body>

</html>
