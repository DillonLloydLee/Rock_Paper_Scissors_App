<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase {

        function test_game_defaultDraw() {
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "rock";
            $player_two = "rock";

            $result = $test_RockPaperScissors->game($player_one, $player_two);

            $this->assertEquals("DRAW!", $result);
        }
    }



    ?>
