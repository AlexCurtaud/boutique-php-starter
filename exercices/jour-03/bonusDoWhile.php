<?php
$codeUsed;
$i = 20;

for ($a = 0; $a < 20; $a++) {
    if (in_array($codeUsed[$a], $codeUsed) === true) {
        continue;
    } else {
        $codeUsed[$a] = rand(10, 30);
    }
}

var_dump($codeUsed);

// do {

//     $usingCode = 
// }
