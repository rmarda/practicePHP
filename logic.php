<?php

$randomDraw = rand(0,4);

foreach($_POST as $player => $name)
{
    $ticket = rand(0,4);

    if($ticket == $randomDraw)
    {
        $contestants[$name] = "winner";
    }
    else
    {
        $contestants[$name] = "loser";
    }
}

