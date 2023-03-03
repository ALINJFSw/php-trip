<?php 

$word = "word";
if (isset($_POST["word"])){
    $word = $_POST["word"];
}

function reverseString($word){
    $special = [];
    $numbers = [];
    for($i = 0; $i<strlen($word);$i++){
        if(preg_match('@[0-9]@', $word[$i])) array_push($numbers, $word[$i]);
        else {$special[$i] = $word[$i];}
    }
    $reversed_numbers = array_reverse($numbers);
    foreach($special as $index => $val){
        array_splice($reversed_numbers,$index,0,$val);
    }
    return $reversed_numbers;
}


echo json_encode(implode("",reverseString($word)));