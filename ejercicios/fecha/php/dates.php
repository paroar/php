<?php

function getDateTime($dateFormat, $dateModifier='+0 day')
{
    $date = new DateTime();
    $date->modify($dateModifier);
    return $date->format($dateFormat);
}
