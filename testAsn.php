<?php
require_once 'vendor/autoload.php';
use GeoIp2\Database\Reader;

// This creates the Reader object, which should be reused across
// lookups.
$cityDbReader = new Reader('GeoLite2-ASN.mmdb');



// Replace "city" with the appropriate method for your database, e.g.,
// "country".
//$record = $cityDbReader->city('128.101.101.101');

//38.94.109.215
//223.167.127.120
$record = $cityDbReader->asn('223.167.127.120');

var_dump($record);