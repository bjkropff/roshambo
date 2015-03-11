<?php
    class RockPaperScissors
    {
        function returnWinner($input1, $input2){
            if ($input1 == $input2) {
                return "draw";
            }

            if ($input1 == 'rock') {
                if ($input2 == 'scissors') {
                    return 'player1';
                }
                elseif ($input2 == 'paper') {
                    return 'player2';
                }
            }
            elseif ($input1 == 'scissors') {
                if ($input2 == 'rock') {
                    return 'player2';
                }
                elseif ($input2 == 'paper'){
                    return 'player1';
                }
            }
            elseif ($input1 == 'paper') {
                if ($input2 == 'rock') {
                    return 'player1';
                }
                elseif ($input2 == 'scissors'){
                    return 'player2';
                }
            }

        }

    }
?>
