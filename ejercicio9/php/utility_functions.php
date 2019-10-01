<?php

function controla_entrada($xs)
{
    return
        trim(
        htmlspecialchars(
        strip_tags($xs)));
}
?>