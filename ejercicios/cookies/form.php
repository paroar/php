<?php
function viewForm(){
    echo<<<EOD
<form action="" method="POST">
  <select name="language">
  <option disabled selected>Language</option>
    <option value="english">English</option>
    <option value="spanish">Español</option>
  </select> 
  <select name="bodyColor">
    <option disabled selected>BodyColor</option>
    <option value="blue">Blue</option>
    <option value="red">Red</option>
  </select>
  <select name="fontColor">
  <option disabled selected>FontColor</option>
  <option value="black">Black</option>
  <option value="white">White</option>
  </select>
  <input type="submit" name="submit" value="submit">
</form> 
EOD;
}