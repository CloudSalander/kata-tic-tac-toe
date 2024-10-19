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

function checkDiagonals(array $game): string | bool {
    if ((($game[0][0] == $game[1][1]) && ($game[1][1] == $game[2][2]) && $game[0][0] != "-")
         ||
        (($game[0][2] == $game[1][1]) && ($game[1][1] == $game[2][0]) && $game[0][2] != "-"))
          return $game[1][1];
    return false;
}

var_dump(checkDiagonals($game1));
var_dump(checkDiagonals($game2));
var_dump(checkDiagonals($game3));
var_dump(checkDiagonals($game4));