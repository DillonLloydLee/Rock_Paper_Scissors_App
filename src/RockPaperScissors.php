<?php
    Class RockPaperScissors {

        function game($player_one, $player_two) {

            if (($player_one != "rock") && ($player_one != "paper") && ($player_one != "scissors")) {
                return "Please answer only with 'rock', 'paper', or 'scissors'.";
            }
            elseif (($player_two != "rock") && ($player_two != "paper") && ($player_two != "scissors")) {
                return "Please answer only with 'rock', 'paper', or 'scissors'.";
            }
            else {
                return "DRAW!";
            }

        }
    }







 ?>
