<?php 

$randomNum = mt_rand(1, 100);

var_dump($randomNum);

echo "Guess a number between 1 and 100\n";

$userGuess = fgets(STDIN);
$userGuess = trim($userGuess);

