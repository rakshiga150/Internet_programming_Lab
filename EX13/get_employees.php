<?php

header("Content-Type: text/xml");

$xml = simplexml_load_file("employees.xml");

echo $xml->asXML();

?>