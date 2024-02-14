<?php

//substituir vogais por *

$string = "Manipulação de string";

echo str_replace(["a", "e", "i", "o", "u", "ã"], "*", $string);

//verificar se um numero eh primo
?>
<br><br>
<?php
$num = 5;

function primo($n){
    for ($i=2; $i < $n; $i++) { 
        if($n % $i == 0){
            return false;
        }
    }
    return true;
}

if(primo($num)){
    echo "true";
}
else{
    echo "false";
}