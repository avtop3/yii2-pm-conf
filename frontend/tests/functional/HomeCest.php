<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class HomeCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage('/en');
        $I->see('KEYNOTE SPEAKERS');
        $I->see('DEADLINES AND KEY DATES');
        $I->seeLink('EN');
        $I->seeLink('RU');
        $I->seeLink('UA');
    }
}