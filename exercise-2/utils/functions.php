<?php

/*
    @param array $arr
    @return void
*/
function print_array(array $arr): void {
    echo '<pre>';
    print_r($arr);
    echo '<pre>';
}

/*
    @param mixed $data
    @return boolean
*/
function f_var_dump(mixed $data): void {
    echo '<pre>';
    var_dump($data);
    echo '<pre>';
}

/*
    @param string $data
    @return int
*/
function str_length(string $data): int {
    $str_arr = str_split($data);
    $str_len = count($str_arr);
    
    return $str_len;
}

/*
    @param string $data
    @return string
*/
function str_remove_space(string $data): string {
    return str_replace(' ', '', $data);
}