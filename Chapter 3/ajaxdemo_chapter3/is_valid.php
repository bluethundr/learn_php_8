<?php
function is_valid(array $product): bool
{
    foreach ($product as $key => $value) {
        if (!is_int($value) && !is_float($value) && !is_string($value)){
            return false;
        } elseif ($key == 'item_number' && !($value >=00000 && $value <=99999)) {
            return false;
        } elseif ($key == 'aisle' && !($value >=00 && $value <=15)) {
            return false;
        } elseif ($key == 'price' && ($value >=1000)) {
            return false;
        }
    }
    return true;
}