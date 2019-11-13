<?php
function viewForm()
{
  require("formArr.php");
  echo <<<EOD
<form action="" method="POST">
  <select name="language">
  <option disabled selected>Language</option>
EOD;
  echo echoOptions($arrLanguages);
  echo "</select>";

  echo <<<EOD
  <select name="backgroundColor">
  <option disabled selected>BackgroundColor</option>
EOD;
  echo echoOptions($arrBackgroundColor);
  echo "</select>";

  echo <<<EOD
  <select name="fontColor">
  <option disabled selected>FontColor</option>
EOD;
  echo echoOptions($arrFontColor);
  echo<<<EOD
   </select>
   <input type="submit" name="submit" value="submit">
  </form>
<div style="display:flex;">

<form action="" method="POST" style="background-color:$bodyColor;padding:5rem">
<h2 style="color:$fontColor">Login</h2>
    <input type="text" placeholder="$user"><br>
    <input type="text" placeholder="$pass"><br>
    <input type="submit" value="$login">
</form>
</div>
EOD;
}

function echoOptions($xs)
{
  $options = "";
  foreach ($xs as $key => $value) {
    $options .= "<option value=" . $key . ">" . $value . "</option>";
  }
  return $options;
}
