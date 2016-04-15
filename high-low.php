<?php 



function gamePlay() {
    $randomNum = mt_rand(1, 100);

    do {
    echo "Guess a number between 1 and 100\n";

    

    $userGuess = fgets(STDIN);
    $userGuess = trim($userGuess);

        if ($userGuess == $randomNum) {
            echo "GOOD GUESS! Do you want to play again?\n";

        } elseif ($userGuess > $randomNum) {

            echo "Too high. Try again...\n";

        } else {

            echo "Too low. Try again...\n";
            
        }
    } while ($userGuess != $randomNum);
}

do {
    
    gamePlay();

    $playAgain = fgets(STDIN);
    $playAgain = trim($playAgain);

} while ($playAgain == 'yes' || $playAgain == 'y');
 

echo "See you later!\n";


