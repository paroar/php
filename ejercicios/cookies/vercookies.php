<?php
$array = array(
    "foo" => array(
        "foo" => "bar",
        "bar" => "foo",
    )
);

highlight_string(var_export($array, true));