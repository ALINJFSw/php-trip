<?php
    $numbers = "first";
    if (isset($_POST["numbers"])){
        $numbers = $_POST["numbers"];
    }
    $numbers_array = explode(",",$numbers);

    function selectionSort($array){
        for($i = 0 ; $i < sizeof($array);$i++){
            $min_index = $i;

            for($j = $i+1; $j < sizeof($array);$j++){
                if ($array[$i] > $array[$j]){
                    $min_index = $j;
                }
                
            }

        $temp = $array[$min_index];
        $array[$min_index] = $array[$i];
        $array[$i] = $temp;
        
        }
        return $array;
    }
    $sorted = selectionSort($numbers_array);
    echo json_encode($sorted);


?>