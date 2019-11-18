<?php
function paintForm(){
    echo<<<EOD
    <div>
    <form method="post" action="./processFile.php" enctype="multipart/form-data">
      <input type="file" name="file" accept="image/png, image/jpeg">
      <input type="submit" value="Upload" name="submit">
      <form>
    </div>
EOD;
}
?>