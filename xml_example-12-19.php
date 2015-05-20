<?php

function mangle_email($nodes) {
    return preg_replace('/([^@\s]+)@([-a-z0-9]+\.)+[a-z]{2,}/is',
                        '$1@...',
                        $nodes[0]->nodeValue);
}

$dom  = new DOMDocument;
$dom->load('address-book.xml');
$xsl  = new DOMDocument;
$xsl->load('stylesheet_mangle.xsl');

$xslt = new XSLTProcessor(); 
$xslt->importStylesheet($xsl); 
$xslt->registerPhpFunctions(); 
print $xslt->transformToXML($dom);

?>