<?php

require_once('Time.php');
require_once('Methods.php');

use Methods\Methods;

function debug($data)
{
    echo "<pre>";
    echo (print_r($data, true) . PHP_EOL);
    echo "</pre>";
}


function generateDigitalArray(int $size): array
{   
    $resultArray = [];
    for($i=0; $i<$size; $i++)
    {
        $resultArray[$i] = rand(-1000, 1000);
    };
    return $resultArray;
}

$array = generateDigitalArray(15);

echo 'Массив';

debug($array);

echo 'Быстрая сортировка';

try {
    debug(Methods::sort($array, 'scalarQuick'));
} catch (Exception $e) {
    debug($e->getMessage());
}

echo 'Пузырьковая сортировка';

try {
    debug(Methods::sort($array, 'scalarBubble'));
} catch (Exception $e) {
    debug($e->getMessage());
}

echo 'Сортировка слиянием';

try {
    debug(Methods::sort($array, 'scalarMerge'));
} catch (Exception $e) {
    debug($e->getMessage());
}

echo 'Сортировка выбором';

try {
    debug(Methods::sort($array, 'scalarSelection'));
} catch (Exception $e) {
    debug($e->getMessage());
}

echo 'Сортировка вставкой';
try {
    debug(Methods::sort($array, 'scalarInsertion'));
} catch (Exception $e) {
    debug($e->getMessage());
}
