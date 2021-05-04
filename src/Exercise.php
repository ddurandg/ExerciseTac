<?php

class Exercise
{
    
    function __construct()
    {

    }

    function getMessageMultiple($val){
    
        $array_a = array('Falabella' => $val % 3,'IT' => $val % 5);
        $finder = array_keys($array_a,0);
        if(count($finder) > 1){
            return 'Integraciones';
        }
        
        $texto = $val;
        foreach ($finder as $value) {
            $texto = $value;
        }
        return $texto;

    }

}

?>
