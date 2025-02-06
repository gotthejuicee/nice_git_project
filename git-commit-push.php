<?php

$repoPath = __DIR__; // Корневая папка проекта
$branch = "master"; // Замени на нужную ветку

// Изменяем один из файлов (например, добавляем строку с датой)
$file = $repoPath . '/log.txt';
file_put_contents($file, "Авто-изменение: " . date("Y-m-d H:i:s") . "\n", FILE_APPEND);

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
