<?php
session_name("ejemplo1");
session_start();

$_SESSION["nombre"] = "2DAW";
print "<p>El nombre es $_SESSION[nombre]</p>";

?>