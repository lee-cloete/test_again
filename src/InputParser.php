<?php

namespace PokerHandEvaluator;

class InputParser
{
    public function parse(string $input): Hand
    {
        $hand = new Hand();
        $cardStrings = explode(',', $input);

        foreach ($cardStrings as $cardString) {
            $cardString = trim($cardString);
            $rank = substr($cardString, 0, -1);
            $suit = substr($cardString, -1);
            $card = new Card($rank, $suit);
            $hand->addCard($card);
        }

        return $hand;
    }
}