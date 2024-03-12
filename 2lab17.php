<?php
function calculateCircleArea($radius){
    $area= ($radius * $radius) *22/7;
    return $area;
};

echo calculateCircleArea(3);

?>