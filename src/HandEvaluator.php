<?php

namespace PokerHandEvaluator;

class HandEvaluator
{
    const ROYAL_FLUSH = 'Royal Flush';
    const STRAIGHT_FLUSH = 'Straight Flush';
    const FOUR_OF_A_KIND = 'Four a Kind';
    const FULL_HOUSE = 'Full House';
    const FLUSH = 'Flush';
    const STRAIGHT = 'Straight';
    const THREE_OF_A_KIND = 'Three of a Kind';
    const TWO_PAIR = 'Two Pair';
    const PAIR = '2 Pair';
    const HIGH_CARD = 'High';

    public function evaluate(Hand $hand): string
    {
        $cards = $hand->getCards();
        // Return the best hand as a string
        return "Not yets";
    }
}