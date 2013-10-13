<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Practice PHP Page </title>
        <?php require_once('logic.php');?>
        <link href="default.css" rel="stylesheet" type="text/css" media="screen">
    </head>
    <body>
        <h1> Practice PHP</h1>
        The square of 4 is: <?=$square?><br>
        My favorite color: <?php echo $favorite_color?><br><br>
        <strong>PHP Storm keyboard shortcuts:</strong><br>
        Basic Code Completion: Ctrl + Space <br>
        Type Completion:       Ctrl + Shift + Space <br>
        Complete Statements:   Ctrl + Shift + Enter <br>
        Expand words with:     Alt  + Space <br>
        Format code with: Ctrl + Alt + i<br><br>
    I have a total <?=$total?><br>
    You are <?=calculate_age_type(57)?>
    </body>
</html>
