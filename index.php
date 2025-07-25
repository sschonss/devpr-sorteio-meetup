<?php
require_once 'LittleTiger.php';

$lt = new LittleTiger('data.csv');

for ($i = 3; $i >= 1; $i--) {
    echo "$i...\n";
    sleep(1);
}

for ($j = 0; $j < 3; $j++) {
    echo "Carregando resultado" . str_repeat('.', $j+1) . "\r";
    sleep(1);
}
echo "\n\n";

$winner = $lt->drawWinnerInfo();
echo "==============================\n";
echo "   🎉 E o ganhador do sorteio é: 🎉\n";
echo "==============================\n";
echo "Nome     : {$winner['Nome']}\n";
echo "Email    : {$winner['Email']}\n";
echo "Telefone : {$winner['Telefone']}\n";
echo "==============================\n";
