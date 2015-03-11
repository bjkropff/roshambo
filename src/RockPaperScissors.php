<?php
    class RockPaperScissors
    {
        function returnWinner($input1, $input2){
            if ($input1 == $input2) {
                return "draw";
            }
            elseif ($input1 == 'rock') {

                if ($input2 == 'scissors') {
                    return 'player1';
                }
                else {
                    return 'player2';
                }
            }

            elseif ($input1 == 'scissors') {

                if ($input2 == 'rock') {
                    return 'player2';
                }
                else {
                    return 'player1';
                }
            }

            else {

                if ($input2 == 'rock') {
                    return 'player1';
                }
                else {
                    return 'player2';
                }
            }

        }

    }
?>
