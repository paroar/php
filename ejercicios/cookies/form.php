<?php
function viewForm($path)
{
  require($path);
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
