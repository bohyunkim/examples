<?php

echo '<h2>Testing Typecasting to an object</h2>';
$test_object = (object) 12345;
$address_park = array(
  'street_address_1' => '789 Missing Circle',
  'street_address_2' => 'Suite 0',
  'city_name' => 'Hamlet',
  'subdivision_name' => 'Territory',
  'country_name' => 'Australia'
);
$test_park=(object)$address_park;

echo '<tt><pre>' . var_export($test_park, TRUE) . '</pre></tt>';

echo '<tt><pre>' . var_dump($test_park, TRUE) . '</pre></tt>';

echo '<tt><pre>' . print_r($test_park, TRUE) . '</pre></tt>';

?>