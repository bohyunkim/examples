<?php

$dom  = new DOMDocument;
$dom->loadXML('<blank/>');
$xsl  = new DOMDocument;
$xsl->load('stylesheet-datetime.xsl');

$xslt = new XSLTProcessor(); 
$xslt->importStylesheet($xsl);
$xslt->registerPHPFunctions(); 
print $xslt->transformToXML($dom);

?>