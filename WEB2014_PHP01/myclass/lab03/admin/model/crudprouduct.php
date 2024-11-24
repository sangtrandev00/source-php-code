<?php

function delOneItem($index, $array)
{
    array_splice($array, $index, 1);
}