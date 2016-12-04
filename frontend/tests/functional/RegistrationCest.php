<?php

namespace frontend\tests\functional;

use common\models\memberVariants\Currency;
use frontend\tests\FunctionalTester;

class RegistrationCest
{
    public function registerNewMember(FunctionalTester $I)
    {
        $I->amOnPage('/registration');
        $I->see('Новый участник конференции', 'h2');
        $I->selectOption('#member-country', 'Украина');
        $I->fillField('#member-name', 'Тестов Тест Тестович');
        $I->fillField('#member-position', 'Тестировщик');
        $I->fillField('#member-phone', '+380990000000');
        $I->fillField('#member-email', 'test@test.com');
        $I->fillField('#member-interest', 'Тестирование');
        $I->selectOption('#member-sciencedegree', 'Нет степени');
        $I->selectOption('#member-sciencetitle', 'Нет звания');
        $I->fillField('#member-organisationtitle', 'Организация');
        $I->fillField('#member-organisationdepartment', 'Отдел качества');
        $I->fillField('#member-organisationaddress', 'ул. Тестовая');
        $I->selectOption('#member-organisationactivity', 'Торговля');
        $I->fillField('#member-organisationurl', 'http://test.org');
        $I->fillField('#member-nameeng', 'Test Test');
        $I->selectOption('.member-participation-type', 'speaker');
        $I->fillField('#member-topictitle', 'How to test everything?');
        $I->selectOption('#member-topiclanguage', 'Английский');
        $I->selectOption('#member-topicsection', 'Секция 2: Управление IT проектами');
        $I->selectOption('#member-paperscount', '5');
        $I->checkOption('#member-agreement');

        $I->click('button[type=\'submit\']');

        $I->seeInCurrentUrl('/');
        $I->see('Успех!', '.alert-success');

        $I->seeRecord('common\models\Member',
            [
                'email' => 'test@test.com',
                'totalSum' => 1150,
                'currency' => Currency::UAH
            ]
        );
    }
}