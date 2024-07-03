<?php

// Card.php
class Card
{
    private $rank;
    private $suit;

    public function __construct($rank, $suit)
    {
        $this->rank = $rank;
        $this->suit = $suit;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function getSuit()
    {
        return $this->suit;
    }
}

// Hand.php
class Hand
{
    private $cards = [];

    public function addCard(Card $card)
    {
        $this->cards[] = $card;
    }

    public function getCards()
    {
        return $this->cards;
    }
}

// HandEvaluator.php
class HandEvaluator
{
    public function evaluate(Hand $hand)
    {
        // Implement the logic to evaluate the best poker hand
        // based on the cards in the hand.
        // Return the hand ranking as a string.

        // Example implementation (not complete):
        $cards = $hand->getCards();
        $ranks = [];
        $suits = [];

        foreach ($cards as $card) {
            $ranks[] = $card->getRank();
            $suits[] = $card->getSuit();
        }

        // Check for various hand rankings based on the ranks and suits
        // Return the highest-ranking hand

        // Placeholder return statement
        return "Two Pair";
    }
}

// InputParser.php
class InputParser
{
    public function parse($input)
    {
        $cards = explode(',', $input);
        $hand = new Hand();

        foreach ($cards as $cardString) {
            $cardString = trim($cardString);
            $rank = substr($cardString, 0, -1);
            $suit = substr($cardString, -1);
            $card = new Card($rank, $suit);
            $hand->addCard($card);
        }

        return $hand;
    }
}

// main.php
require_once 'Card.php';
require_once 'Hand.php';
require_once 'HandEvaluator.php';
require_once 'InputParser.php';

$input = "AS, 10C, 10H, 3D, 3S";

$parser = new InputParser();
$hand = $parser->parse($input);

$evaluator = new HandEvaluator();
$result = $evaluator->evaluate($hand);

echo "Best hand: " . $result;