<?php

namespace jacobemerick;

function shuffle_slightly(array &$array, $tolerance)
{
    if (!is_array($array) || !is_int($tolerance) || $tolerance < 1) {
        return false;
    }

    if (count($array) <= 1) {
        return true;
    }

    if (count($array) < $tolerance) {
        return shuffle($array);
    }

    $values = array_values($array);
    $keys   = array_keys($array);

    for ($max = count($keys) - 1, $i = $max; $i >= 0; $i--) {
        if ($keys[$i] == $i + $tolerance) {
            $offset = $i;
        } else if ($i == 0) {
            $offset = 0;
        } else {
            $offset = rand(max($i - $tolerance, 0), $i);
        }
        $piece = array_splice($keys, $offset, 1);
        array_splice($keys, $i, 0, $piece);
    }

    foreach ($keys as $key => $position) {
        $array[$key] = $values[$position];
    }
    return true;
}

