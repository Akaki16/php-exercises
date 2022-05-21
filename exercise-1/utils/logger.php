<?php

// this function doesn't return anything
function print_array(array $arr): void {
    echo '<pre>';
    print_r($arr);
    echo '<pre>';
}

// flexible var_dump function (adds new lines)
function f_var_dump(mixed $data) {
    echo '<pre>';
    var_dump($data);
    echo '<pre>';
}