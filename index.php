<?php
require_once 'LittleTiger.php';

$lt = new LittleTiger('data.csv');
$winner = $lt->drawWinner();

echo "O vencedor é: $winner\n";


