<?php
    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_isEqual()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "rock";
            $input2 = "rock";

            //Act
            $result = $test_RockPaperScissors->returnWinner($input1,$input2);

            //Assert
            $this->assertEquals("draw", $result);
        }

        function test_RockVerseScissors_Player1()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "rock";
            $input2 = "scissors";

            $result = $test_RockPaperScissors->returnWinner($input1,$input2);

            $this->assertEquals("player1", $result);

        }

        function test_RockVersePaper_Player2()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "rock";
            $input2 = "paper";

            $result = $test_RockPaperScissors->returnWinner($input1,$input2);

            $this->assertEquals("player2", $result);
        }

        function test_ScissorsVerseRock_Player2()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "scissors";
            $input2 = "rock";

            $result = $test_RockPaperScissors->returnWinner($input1,$input2);

            $this->assertEquals("player2", $result);

        }

        function test_PaperVerseRock_Player2()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "paper";
            $input2 = "rock";

            $result = $test_RockPaperScissors->returnWinner($input1, $input2);

            $this->assertEquals("player1", $result);
        }

        function test_PaperVerseScissors_Player2()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "paper";
            $input2 = "scissors";

            $result = $test_RockPaperScissors->returnWinner($input1, $input2);

            $this->assertEquals("player2", $result);
        }

        function test_ScissorsVersePaper_Player1()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "scissors";
            $input2 = "paper";

            $result = $test_RockPaperScissors->returnWinner($input1, $input2);

            $this->assertEquals("player1", $result);
        }
    }



?>
