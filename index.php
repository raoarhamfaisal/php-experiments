<!-- To run a built in php server 
php -S localhost:8000 
-->
<?php

require __DIR__ . '/vendor/autoload.php';
use Cocur\Slugify\Slugify;

$slugify = new Slugify();

echo  $slugify->slugify("The sky is blue and the grass is green!!!");

function doubleMe($x){
    return $x * 2;
}
function tripleMe($x){
    return $x * 3;
}
$result = tripleMe(doubleMe(100));


echo "\nThis number is large enough $result";