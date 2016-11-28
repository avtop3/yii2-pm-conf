<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class AboutCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage('/about');
        $I->see('О конференции', 'h2');
        $I->see('Организационный комитет', 'h3');
        $I->see('Программный комитет', 'h3');

        $I->amOnPage('/en/about');
        $I->see('About conference', 'h2');
        $I->see('ORGANIZING COMMITTEE', 'h3');
        $I->see('PROGRAM COMMITTEE', 'h3');

        $I->amOnPage('/uk/about');
        $I->see('Про конференцію', 'h2');
        $I->see('ОРГАНІЗАЦІЙНИЙ КОМІТЕТ', 'h3');
        $I->see('ПРОГРАМНИЙ КОМІТЕТ', 'h3');
    }
}