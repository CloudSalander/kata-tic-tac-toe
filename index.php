<?php 

define('MATRIX_LENGTH', 3);

$game1 = [["X","O","O"],["O","X","O"],["-","O","X"]];
$game2 = [["O","X","-"],["O","X","-"],["O","-","-"]];
$game3 = [["O","X","O"],["X","O","X"],["X","X","O"]];
$game4 = [["-","-","-"],["O","O","-"],["X","X","X"]];

//TODO: Array of checker functions?

function checkRows(array $game): string | bool {
    for($i = 0; $i < MATRIX_LENGTH; ++$i) {
        $row = $game[$i];
        if(($row[0] == $row[1]) 
            && ($row[1] == $row[2]) 
            && $row[0] != "-") return $row[0];
    }
    return false;
}

function checkColumns(array $game): string | bool {
    for($j = 0; $j < MATRIX_LENGTH; ++$j) {
        if(($game[0][$j] == $game[1][$j]) 
            && $game[1][$j] == $game[2][$j] 
            && $game[0][$j] != "-")  return $game[0][$j];
    }
    return false;
}

var_dump(checkColumns($game1));
var_dump(checkColumns($game2));
var_dump(checkColumns($game3));
var_dump(checkColumns($game4));