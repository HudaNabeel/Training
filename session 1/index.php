<?php


function days($number)
{
    $name = 0;
    switch ($number) {
        case '1':
            $name = 'Sunday';
            break;
        case '2':
            $name = 'Monday';
            break;
        case '3':
            $name = 'Tuesday';
            break;
        case '4':
            $name = 'Wednesday';
            break;
        case '5':
            $name = 'Thursday';
            break;
        case '6':
            $name = 'Friday';
            break;
        case '7':
            $name = 'Saturday';
            break;

        default:
            $name = 0;
            break;
    }
    return $name;
}

echo days(7);
