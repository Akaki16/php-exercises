<?php

/*
    @param string $str
    @param return string
*/
function str_wrap_quotes(string $str): string {
    return '"'.trim($str, '"').'"';
}

/*
    @param string $data
    @return string
*/
function str_remove_space(string $data): string {
    return str_replace(' ', '', $data);
}