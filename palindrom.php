<?php
    $word = "first";
    if (isset($_POST["word"])){
        $word = $_POST["word"];
    }
    //first :

    // function palindrom($word){
    //     if(strlen($word) == 1) return TRUE;
    //     if(strlen($word) == 2) return $word[0] == $word[1];
    //     if($word[0] == $word[-1]) return palindrom(substr($word,1,-1));
    //     return FALSE;
    // }


    //second :
    function palindrom($word){
        $i = 0;
        $j = strlen($word) -1 ;

        while ($i < $j){
            if ($word[$i] != $word[$j]) return FALSE;
            $i++;
            $j--;
        }
        return True;
    }

    echo palindrom($word) ? 'true' : 'false';
    

    