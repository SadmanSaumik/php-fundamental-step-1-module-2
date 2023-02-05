<?php
//  HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars. But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent. If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars,  the commission rate is fifteen percent. If the tuition fee is below seven thousand dollars the data will be invalid. As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.

$coursePrice = 35000;

//Solution-1

$bonus = $coursePrice > 20000 ? $coursePrice * 0.25 : ( $coursePrice > 10000 && $coursePrice < 20000 ? $coursePrice * 0.2 : ( $coursePrice < 10000 && $coursePrice > 7000 ? $coursePrice * 0.15 : "invalid" ) );

echo "The course price is {$coursePrice} and the commission is {$bonus}";

echo PHP_EOL;

//Solution-2

$commission = $coursePrice < 7000 ? "invalid" : ( $coursePrice < 10000 ? $coursePrice * 0.15 : ( $coursePrice < 20000 ? $coursePrice * 0.2 : $coursePrice * 0.25 ) );

echo "The course price is {$coursePrice} and the commission is {$commission}";
