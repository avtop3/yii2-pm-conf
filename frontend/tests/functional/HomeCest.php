<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class HomeCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage('/en');
        $I->seeInCurrentUrl('/en');
        $I->see('KEYNOTE SPEAKERS');
        $I->see('DEADLINES AND KEY DATES');
        $I->seeLink('EN', '/en');
        $I->seeLink('RU', '/');
        $I->seeLink('UA', '/uk');

        $I->amOnPage('/ru');
        $I->seeInCurrentUrl('/');
        $I->see('Ключевые докладчики');
        $I->see('Ключевые даты');
        $I->seeLink('Регистрация', '/registration');
        $I->seeElement('#regLink a', ['href' => '/registration']);

        $I->amOnPage('/uk');
        $I->seeInCurrentUrl('/uk');
        $I->see('КЛЮЧОВІ ДОПОВІДАЧІ');
        $I->see('ВАЖЛИВІ ДАТИ');
        $I->seeLink('Реєстрація', '/uk/registration');
        $I->seeElement('#regLink a', ['href' => '/uk/registration']);
    }
}