<?php

// This could also come from $_GET['city'];
$city = 'San Francisco';

$dom  = new DOMDocument;
$dom->load('address-book.xml');
$xsl  = new DOMDocument;
$xsl->load('stylesheet_city.xsl');

$xslt = new XSLTProcessor(); 
$xslt->importStylesheet($xsl); 
$xslt->setParameter(NULL, 'city', $city); 
print $xslt->transformToXML($dom);

?>