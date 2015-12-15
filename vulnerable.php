<?php
libxml_disable_entity_loader (false);
$xmlfile = file_get_contents('php://input');
$dom = new DOMDocument();
$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD | LIBXML_PARSEHUGE); 
$message = simplexml_import_dom($dom);
$text = $message->text;

echo $text;
?>
