<!-- To run a built in php server 
php -S localhost:8000 
-->
<?php

function doubleMe($x){
    return $x * 2;
}
function tripleMe($x){
    return $x * 3;
}
$result = tripleMe(doubleMe(100));


echo "This number is large enough $result";