<?php 

$age = "age";
if (isset($_POST["age"])){
    $age = $_POST["age"];
}

    function isPrime($age){
        if ($age <= 1) return false;
        if ($age == 2) return true;
        for($i = 2; $i < $age; $i++){
            if($age % $i == 0){
                return false;
            }
        }
        return true;
    }

echo isPrime($age) ? "true" : "false";