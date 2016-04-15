<?php 

// this defines my function that initializes and facilitates the game 
function gamePlay() {

    // this variable generates and stores my random number 
    $randomNum = mt_rand(1, 100);

    do {

        // This message displays when the game starts
        echo "Guess a number between 1 and 100\n";

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
    gamePlay();

    // This stores the user's answer to whether or not they want to play again
    $playAgain = fgets(STDIN);
    $playAgain = trim($playAgain);

// This keeps the game going until the user enters anything other than
// yes or y in response to the 'play again' question
} while ($playAgain == 'yes' || $playAgain == 'y');
 
// This message displays when the user enters anything other than yes
// or y to the 'play again' question
echo "See you later!\n";


