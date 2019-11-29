<?php
session_name("ejemplo1");
session_start();

print "<p>El nombre es $_SESSION[nombre]</p>";
?>