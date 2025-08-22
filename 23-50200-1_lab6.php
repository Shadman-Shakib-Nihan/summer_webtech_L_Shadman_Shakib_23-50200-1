<?php 

echo ' Array [1,2,3,4,5]';
echo '<br>';
function sumA($arr){
    $sum = 0;
    foreach ($arr as $value) {
        if (is_numeric($value)) {
            $sum += $value;
        }
    }
    return $sum;
}
 echo 'Sum of array = '.sumA([1,2,3,4,5]);

echo '<br>';
function secondmax($arr){
    if (count($arr) < 2) {
        return null; // Not enough elements
    }
    $max = max($arr);
    $secondMax = null;
    foreach ($arr as $value) {
        if ($value !== $max && (is_null($secondMax) || $value > $secondMax)) {
            $secondMax = $value;
        }
    }
    return $secondMax;
}
echo 'Second max of array = '.secondmax([1,2,3,4,5]);
echo '<br>';

function rAngleStar($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            
                echo '*';
        }
        echo '<br>';
        }
        
    }
echo 'Right Angle Star Pattern:<br>';
rAngleStar(5);
echo '<br>';


function rString($n) {
    $sting= '';
    for ($i = $n.strlen-1; $i >=0 ; $i--) {
        for ($j = 1; $j <=$i; $j++) {
            $sting[$j] = $n[$i];
           echo $sting[$j];
        }
    }
    
}
 rString('hello');
echo '<br>';

function separateVowelConsonent($string) {
    $vowels = '';
    $consonants = '';
    $string = strtolower($string);
    
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_alpha($string[$i])) {
            if (in_array($string[$i], ['a', 'e', 'i', 'o', 'u'])) {
                $vowels .= $string[$i];
            } else {
                $consonants .= $string[$i];
            }
        }
    }
    
    return ['vowels' => $vowels, 'consonants' => $consonants];
}
$result = separateVowelConsonent('Hello World');
echo 'Vowels: ' . $result['vowels'] . '<br>';
echo 'Consonants: ' . $result['consonants'] . '<br>';
?>
