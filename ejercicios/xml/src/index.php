<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>OTRO INDEX</h1>
    <?php

$note=<<<XML
<notes>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
<note>
<to>ASD</to>
<from>QWE</from>
<heading>QWERTY</heading>
<body>MNBVCX</body>
</note>
</notes>
XML;

$xml = new SimpleXMLElement($note);

$result = $xml->xpath("/notes/note[to='Tove']");

print_r($result);
    ?>
</body>

</html>