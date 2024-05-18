<?php
$strings = ["Hello", "World", "PHP", "Programming"];


foreach ($strings as $val) {
    $count = 0;
    for ($i = 0; $i < strlen($val); $i++) {
        if ($val[$i] == 'a' || $val[$i] == 'e' || $val[$i] == 'i' || $val[$i] == 'o' || $val[$i] == 'u' || $val[$i] == 'A' || $val[$i] == 'E' || $val[$i] == 'I' || $val[$i] == 'O' || $val[$i] == 'U') {
            $count++;
        }
    }

    $res = strrev($val);

    echo "Original String: {$val}, Vowel Count:{$count}, Reverse string:{$res}", "\n";
}
