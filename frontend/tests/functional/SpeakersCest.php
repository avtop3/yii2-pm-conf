<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class SpeakersCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage('/speakers');
        $I->see('Спикеры конференции', 'h2');
        $I->see('Пленарные доклады');
        $I->see('IT секция');
        $I->see('Мастер-класс');
        $I->seeElement('div.speaker');

        $I->amOnPage('/en/speakers');
        $I->see('CONFERENCE SPEAKERS', 'h2');

        $I->amOnPage('/uk/speakers');
        $I->see('СПІКЕРИ КОНФЕРЕНЦІЇ', 'h2');
    }
}