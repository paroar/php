<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    // $xml = simplexml_load_file("xml/movies.xml");
    // echo "<pre>";
    // var_dump($xml);
    // echo "</pre>";

    $users_array = array(
        "total_users" => 3,
        "users" => array(
            array(
                "id" => 1,
                "name" => "Nitya",
                "address" => array(
                    "country" => "India",
                    "city" => "Kolkata",
                    "zip" => 700102,
                )
            ),
            array(
                "id" => 2,
                "name" => "John",
                "address" => array(
                    "country" => "USA",
                    "city" => "Newyork",
                    "zip" => "NY1234",
                )
            ),
            array(
                "id" => 3,
                "name" => "Viktor",
                "address" => array(
                    "country" => "Australia",
                    "city" => "Sydney",
                    "zip" => 123456,
                )
            ),
        )
    );

<<<<<<< HEAD

    // create simpleXML object
    $xml = new SimpleXMLElement("<?xml version=\"1.0\"?><SearchHotels></SearchHotels>");
    $node = $xml->addChild('request');

    // function call to convert array to xml
    array_to_xml($param, $node);

    // display XML to screen
    echo $xml->asXML();
    die();

    // function to convert an array to XML using SimpleXML
    function array_to_xml($array, &$xml)
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                if (!is_numeric($key)) {
                    $subnode = $xml->addChild("$key");
                    array_to_xml($value, $subnode);
                } else {
                    array_to_xml($value, $xml);
                }
            } else {
                $xml->addChild("$key", "$value");
            }
        }
    }
=======
function array_to_xml($array, &$xml_user_info)
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            if (!is_numeric($key)) {
                $subnode = $xml_user_info->addChild("$key");
                array_to_xml($value, $subnode);
            } else {
                $subnode = $xml_user_info->addChild("item$key");
                array_to_xml($value, $subnode);
            }
        } else {
            $xml_user_info->addChild("$key", htmlspecialchars("$value"));
        }
    }
}
    //creating object of SimpleXMLElement
$xml_user_info = new SimpleXMLElement("<?xml version='1.0'?><user_info></user_info>");

//function call to convert array to xml
array_to_xml($users_array, $xml_user_info);

//saving generated xml file
$xml_file = $xml_user_info->asXML('users.xml');

//success and error message based on xml creation
if ($xml_file) {
    echo 'XML file have been generated successfully.';
} else {
    echo 'XML file generation error.';
}


>>>>>>> xml
    ?>
</body>

</html>