<?php
    class RockPaperScissors
    {
        private $input1;
        private $input2;

        function __construct($input1, $input2 = 0) {
            $this->input1 = strtolower($input1);
            $this->input2 = strtolower($input2);

        }

        function getInput1(){
            return $this->input1;
        }
        function getInput2(){
            return $this->input2;
        }

        function returnWinner(){

            if ($this->input1 == 'rock'){
                $this->input2 = 'paper';
            }
            elseif ($this->input1 == 'paper'){
                $this->input2 = 'scissors';
            }
            elseif ($this->input1 == 'scissors'){
                $this->input2 = 'rock';
            };


                if ($this->input1 == $this->input2) {
                    return "Draw";
                }

                elseif ($this->input1 == 'rock') {

                    if ($this->input2 == 'scissors') {
                        return 'Player 1 WINNER';
                    }
                    else {
                        return 'Player 2 WINNER';
                    }
                }

                elseif ($this->input1 == 'scissors') {

                    if ($this->input2 == 'rock') {
                        return 'Player 2 WINNER';
                    }
                    else {
                        return 'Player 1 WINNER';
                    }
                }

                else {

                    if ($this->input2 == 'rock') {
                        return 'Player 1 WINNER';
                    }
                    else {
                        return 'Player 2 WINNER';
                    }
                }


        }

    }
?>
