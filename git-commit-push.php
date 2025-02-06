<?php

$repoPath = __DIR__; // Корневая папка проекта
$branch = "main"; // Замени на нужную ветку

// Команды Git
$commands = [
    "cd {$repoPath}",
    "git add .",
    "git commit -m 'Авто-коммит: " . date("Y-m-d H:i:s") . "'",
    "git push origin {$branch}"
];

// Выполняем команды
$output = [];
$returnVar = 0;
exec(implode(" && ", $commands), $output, $returnVar);

// Выводим результат
echo implode("\n", $output) . "\n";
echo "Git коммит и пуш выполнены.\n";
