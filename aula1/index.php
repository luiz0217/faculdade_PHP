<?php

//inverter uma string

$string = "repeticao";
$inv = "";

for ($i=strlen($string) - 1; $i >= 0; $i--) { 
    $inv .= $string[$i];
}

echo $inv;

//palindromo detecthor
?>
<br><br>
<?php
function isPal($str) {
    echo $str == strrev($str) ? 'eh pal' : 'não eh pal';
}

$str2 = "radar";

isPal($str2);

echo "<br>";

// Crie uma função que receba um número e retorne se é positivo, negativo ou zero.

$num = 5;

if($num > 0){
    echo 'eh positivo';
}
else if($num < 0){
    echo 'eh negativo';
}
else{
    echo 'zero';
}

// Conte o número de palavras em uma frase e imprima cada palavra em uma nova linha.
echo '<br>';

$fraze = "aaaaa baaaa caaaa";
echo str_word_count($fraze); 
echo "<br>";
echo str_replace(" ","<br>",$fraze);


// Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3 por "Fizz" e múltiplos de 5 por "Buzz".
echo "<br>";

for ($i=1; $i <= 20; $i++) { 
    if($i % 3 == 0){
        echo "Fizz";
    }
    else if($i % 5 == 0){
        echo "Buzz";
    }
    else{
        echo $i;
    }
    echo " ";
}

// Crie uma função que remova os espaços em branco de uma string.
echo '<br>';

echo str_replace(" ","",$fraze);

echo '<br>';
// Crie um programa que calcule e imprima os números Fibonacci até o décimo
$num1 = 0;
$num2 = 1;
echo $num1 ."||". $num2;
echo "<br>";
for($i = 0;$i < 10;$i++){
    $aux = $num2;
    $num2 += $num1;
    $num1 = $aux;
    echo $num1 ."||". $num2;
    echo "<br>";
    
}

echo "<br>";
// Crie uma função que receba um texto e retorne se é um pangrama (contém todas as letras do alfabeto pelo menos uma vez).


  
function pangrama($str) { 
      
    $str = strtolower($str); 
    $letras = array_fill(0, 26, false); 
    for ($i = 0; $i < strlen($str); $i++) { 
        $char = $str[$i]; 
        if (ctype_alpha($char)) { 
            $letras[ord($char) - ord('a')] = true; 
        } 
    } 
    return !in_array(false, $letras); 
} 
$str = "abcdefghijklmnopqrstuvwxyz";

if(pangrama($str)){
    echo "true";
}
else{
    echo "false";
}
  