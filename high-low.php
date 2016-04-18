<?php 

// This allows the user to set the min and max range for the random number
    if ($argc == 3 && ctype_digit($argv[1]) && ctype_digit($argv[2])) {
        $min = $argv[1];
        $max = $argv[2];

        $randomNum = mt_rand((int)$min, (int)$max);
    }

// this defines my function that initializes and facilitates the game 
function gamePlay($min, $max, $randomNum) {

    do {
        // This message displays when the game starts
        echo "Guess a number between {$min} and {$max}\n";

        // This variable stores the user's guess
        $userGuess = fgets(STDIN);
        $userGuess = trim($userGuess);

        if ($userGuess == $randomNum) {

            //This message displays if the user guesses correctly 
            echo "GOOD GUESS! Do you want to play again?\n";

        } elseif ($userGuess > $randomNum) {

            // This message displays if the user guesses too high
            echo "Too high. Try again...\n";

        } else {

            //This message displays if the user guesses too low
            echo "Too low. Try again...\n";
            
        }
    // This keeps the game going until the condition evaluates false 
    } while ($userGuess != $randomNum);
}

// This do while loop actually runs the game 
do {
    // This starts the game 
    gamePlay($min, $max, $randomNum);

    // This stores the user's answer to whether or not they want to play again
    $playAgain = fgets(STDIN);
    $playAgain = trim($playAgain);

// This keeps the game going until the user enters anything other than
// yes or y in response to the 'play again' question
} while ($playAgain == 'yes' || $playAgain == 'y');
 
// This message displays when the user enters anything other than yes
// or y to the 'play again' question
echo "See you later!\n";


