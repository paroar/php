<?php
setcookie("mivariable", false, time() + 3600);
  highlight_string(var_export($_COOKIE['mivariable'],true));
