<?php
session_name("ejemplo2");
session_start();

$_SESSION["nombre"] = "ASIR";
print "<p>El nombre es $_SESSION[nombre]</p>";
