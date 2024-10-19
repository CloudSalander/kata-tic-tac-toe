<?php 

define('MATRIX_LENGTH', 3);

$game1 = [["X","O","O"],["O","X","O"],["-","O","X"]];
$game2 = [["O","X","-"],["O","X","-"],["O","-","-"]];
$game3 = [["O","X","O"],["X","O","X"],["X","X","O"]];
$game4 = [["-","-","-"],["O","O","-"],["X","X","X"]];

$games = [$game1,$game2,$game3,$game4];

$checker_functions = [
    'row' =>  function(array $game): string | bool {
        for($i = 0; $i < MATRIX_LENGTH; ++$i) {
            $row = $game[$i];
            if(($row[0] == $row[1]) 
                && ($row[1] == $row[2]) 
                && $row[0] != "-") return $row[0];
        }
        return false;
    },
    'column' => function(array $game): string | bool {
        for($j = 0; $j < MATRIX_LENGTH; ++$j) {
            if(($game[0][$j] == $game[1][$j]) 
                && $game[1][$j] == $game[2][$j] 
                && $game[0][$j] != "-")  return $game[0][$j];
        }
        return false;
    },
    'diagonal' => function(array $game): string | bool {
        if ((($game[0][0] == $game[1][1]) && ($game[1][1] == $game[2][2]) && $game[0][0] != "-")
             ||
            (($game[0][2] == $game[1][1]) && ($game[1][1] == $game[2][0]) && $game[0][2] != "-"))
              return $game[1][1];
        return false;
    }
];

foreach($games as $game) {
    foreach($checker_functions as $key => $checker_function) {
        $result = $checker_function($game);
        if($result !== false) echo "Winner is ".$result." by ".$key.PHP_EOL;
    }
}
