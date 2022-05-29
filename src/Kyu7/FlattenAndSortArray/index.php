<?php

/*
 * Kata: Flatten and sort an array
 * URL: https://www.codewars.com/kata/57ee99a16c8df7b02d00045f/php
 */
function flatten_and_sort(array $a): array
{
    $a = array_merge(...$a);
    sort($a);
    return $a;
}