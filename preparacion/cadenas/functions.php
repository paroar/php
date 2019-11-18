<?php
function paintForm()
{
  echo <<<EOD
    <form method="POST" action="./options.php">
      <input type="submit" name="submit" value="Search">
      <input type="submit" name="submit" value="Exists">
      <input type="submit" name="submit" value="Positions">
      <input type="submit" name="submit" value="Replace"><br>
      <input type="text" placeholder="Search..." name="wordSearch">
      <input type="text" placeholder="Replace..." name="wordReplace"><br>
      <textarea name="textarea" placeholder="Text..." class="texto"></textarea>
    </form>
EOD;
}

function search($x, $xs)
{
  $ocurrences = [];
  $words = explode(" ", $xs);
  foreach ($words as $key => $word) {
    strcmp($word, $x) === 0 ? array_push($ocurrences, $key) : null;
  }
  return count($ocurrences) > 0 ? $ocurrences : false;
}

function replace($x, $y, $zs)
{
  $word = inputControl($x);
  $replaceWord = inputControl($y);
  return str_replace($word, $replaceWord, $zs);
}
function inputControl($x)
{
  return trim(htmlspecialchars(strip_tags($x)));
}
