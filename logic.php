<?php
$square = 4 * 4;
$favorite_color = "red";

$quarter = .25;
$dime = .10;
$nickel = .05;


$total = $quarter * 5 + $nickel * 4 + $dime * 2;

function calculate_age_type($age)
{
    if($age >0 && $age < 5)
        $person_type = "a baby";
    elseif ($age >5 && $age <= 12)
        $person_type = "a kiddo";
    elseif($age >12 && $age <= 19 )
        $person_type = "a teenager";
    elseif($age > 19 && $age <80)
        $person_type = "an adult";
    else
        $person_type = "a super wise person";
    return $person_type;
}

?>