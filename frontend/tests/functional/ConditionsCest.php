<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class ConditionsCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage('/conditions');
        $I->see('УСЛОВИЯ УЧАСТИЯ', 'h2');
        $I->see('РЕКВИЗИТЫ ДЛЯ ОПЛАТЫ', 'h2');

        $I->amOnPage('/en/conditions');
        $I->see('CONDITIONS OF PARTICIPATION', 'h2');

        $I->amOnPage('/uk/conditions');
        $I->see('УМОВИ УЧАСТІ', 'h2');
    }
}