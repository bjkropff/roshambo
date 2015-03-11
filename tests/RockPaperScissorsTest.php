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

    }


?>
