<?php
require_once 'LittleTiger.php';

$lt = new LittleTiger('data.csv');

$frames = [
    "🔵 Sorteio começando...",
    "🟡 Sorteio começando...",
    "🟢 Sorteio começando...",
    "🔴 Sorteio começando...",
];
foreach ($frames as $frame) {
    echo $frame . "\r";
    usleep(500000);
}

for ($i = 3; $i >= 1; $i--) {
    echo "\nContagem: $i";
    sleep(1);
}

for ($j = 0; $j < 6; $j++) {
    echo "\rCarregando resultado" . str_repeat('.', ($j % 3) + 1);
    usleep(400000);
}
echo "\n\n";

$winner = $lt->drawWinnerInfo();

$border = str_repeat('═', 40);
$starLine = str_repeat(' ', 7) . "✨✨✨ SORTEIO DEV PR ✨✨✨";
$winnerLine = str_repeat(' ', 5) . "🎉 E o ganhador do sorteio é: 🎉";

$info = [
    "\033[1;36m$border\033[0m",
    "\033[1;33m$starLine\033[0m",
    "\033[1;36m$border\033[0m",
    "\033[1;32m$winnerLine\033[0m",
    "\033[1;36m$border\033[0m",
    "\033[1;35mNome     :\033[0m \033[1;37m{$winner['Nome']}\033[0m",
    "\033[1;35mEmail    :\033[0m \033[1;37m{$winner['Email']}\033[0m",
    "\033[1;35mTelefone :\033[0m \033[1;37m{$winner['Telefone']}\033[0m",
    "\033[1;36m$border\033[0m"
];
foreach ($info as $line) {
    echo $line . "\n";
    usleep(600000);
}
