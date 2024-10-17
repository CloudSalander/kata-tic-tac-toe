<?php 

$game1 = [["X","O","O"],["O","X","O"],["-","O","X"]];
$game2 = [["O","X","-"],["O","X","-"],["O","-","-"]];
$game3 = [["O","X","O"],["X","O","X"],["X","X","O"]];
$game4 = [["-","-","-"],["O","O","-"],["X","X","X"]];

//TODO: Array of checker functions?

function checkRows(array $game): string | bool {
    for($i = 0; $i < sizeof($game); ++$i) {
        $row = $game[$i];
        if(($row[0] == $row[1]) && ($row[1] == $row[2]) && $row[0] != "-") return $row[0];
    }
    return false;
}

var_dump(checkRows($game4));
