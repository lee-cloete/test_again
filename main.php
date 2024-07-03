<?php

require_once __DIR__ . '/vendor/autoload.php';

use PokerHandEvaluator\InputParser;
use PokerHandEvaluator\HandEvaluator;

$input = $argv[1] ?? '';

$parser = new InputParser();
$hand = $parser->parse($input);

$evaluator = new HandEvaluator();
$bestHand = $evaluator->evaluate($hand);

echo "Best hand: " . $bestHand . "\n";