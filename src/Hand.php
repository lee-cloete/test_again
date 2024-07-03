<?php

namespace PokerHandEvaluator;

class Hand
{
    private $cards = [];

    public function addCard(Card $card): void
    {
        $this->cards[] = $card;
    }

    public function getCards(): array
    {
        return $this->cards;
    }
}