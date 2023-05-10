<?php 

$mabna = 53;
$i = 0;

while (pow(2,$i) <= $mabna){
$num = pow(2,$i);
echo $num;
echo '<br>';

$i++;
}

echo '<hr>';
echo '( ' . $mabna . ' )2 = ';

echo '( ';
if ($mabna - $num >= 0){
    $num1 = $mabna - $num;
    echo '1 ';
}
else {
    echo '0 ';
}

while ($i > 1){
    $num /= 2;
    if ($num1 - $num >= 0)
    {
        $num1 = $num1 - $num;
        echo '1 ';
    }
    else 
    {

        echo '0 ';
    }
    
    $i--;
}
echo ' )10';