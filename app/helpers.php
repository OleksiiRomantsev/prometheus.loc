<?php

// конвертация php переменных в js
function tojs(array $vars) {

    foreach($vars as $key => $value) {

        if(gettype($value) === 'double' OR gettype($value) === 'integer') {
            echo " const {$key} = {$value}; ";
        }

        if( gettype($value) === 'boolean') {

             if($value === true) echo " let {$key} = true; ";
             else echo " const {$key} = false; ";
        }

        if(gettype($value) === 'string') {
            echo " const {$key} = '{$value}'; ";
        }

        if(gettype($value) === 'array' OR gettype($value) === 'object') {

            $value = json_encode($value);
            echo "const {$key} = JSON.parse('{$value}');";
        }

    }

}

function toTimestampFormat($time = false) {
    if($time === false) $time = time();
    return date(config('app.timestamp_format'), $time);
}

function getTrainingTypeInfo(int $training_type_code) {

    switch($training_type_code) {

        case 1: $training_type = [
            'name' => 'Start Training',
            'code' => 1
        ]; break;

        case 2: $training_type = [
            'name' => 'Consolidation Training',
            'code' => 2
        ]; break;

        case 3: $training_type = [
            'name' => 'Repeat Training',
            'code' => 3
        ]; break;
    }

    return $training_type;


}
