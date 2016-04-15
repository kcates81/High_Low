<?php 

$randomNum = mt_rand(1, 100);

do {
    echo "Guess a number between 1 and 100\n";

    $userGuess = fgets(STDIN);
    $userGuess = trim($userGuess);

    if ($userGuess == $randomNum) {
        echo "GOOD GUESS!\n";
    } elseif ($userGuess > $randomNum) {

        echo "Too high. Try again...\n";

    } else {

        echo "Too low. Try again...\n";
        
    }
} while ($userGuess != $randomNum);




