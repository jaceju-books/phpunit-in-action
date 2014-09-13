<?php
require_once __DIR__ . '/Math.php';

$min = $argv[1];
$max = $argv[2];

echo Math::sum($min, $max), "\n";