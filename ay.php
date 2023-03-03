<?php 

$word = "word";
if (isset($_POST["word"])){
    $word = $_POST["word"];
}

function ay($word) {
    $i = 0;
    while(preg_match('@[aeiou]@', $word[$i])){
        $i++;
    }
    if ($i == 0){
        return $word . "ay";
    }
    else {
        return substr($word,$i) . "ay";
    }
}

echo ay($word);