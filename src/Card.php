<?php

namespace PokerHandEvaluator;

class Card
{
    private $rank;
    private $suit;

    public function __construct(string $rank, string $suit)
    {
        $this->rank = $rank;
        $this->suit = $suit;
    }

    public function getRank(): string
    {
        return $this->rank;
    }

    public function getSuit(): string
    {return $this->suit;
    }
}