<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class ContactUsCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage('/contact-us');
        $I->see('Контакты', 'h2');
        $I->see('61002, Украина, г. Харьков, ул. Кирпичева 21, НТУ «ХПИ», Кафедра стратегического управления (корпус У-2, 7й этаж, к. 703)');
        $I->see('+38(066)060-16-19');
        $I->see('+38(057)707-68-24', '#kharazii > p');
        $I->see('imconf@gmail.com');
        $I->see('anjashechka');
        $I->see('+38(050)984-69-79');
        $I->see('+38(057)707-68-24', '#lobach > p');
        $I->see('publish.conf@gmail.com');
        $I->see('helena_0900');

        $I->amOnPage('/en/contact-us');
        $I->see('CONTACT INFORMATION', 'h2');
        $I->see('+38(066)060-16-19');
        $I->see('+38(057)707-68-24', '#kharazii > p');
        $I->see('imconf@gmail.com');
        $I->see('anjashechka');
        $I->see('+38(050)984-69-79');
        $I->see('+38(057)707-68-24', '#lobach > p');
        $I->see('publish.conf@gmail.com');
        $I->see('helena_0900');

        $I->amOnPage('/uk/contact-us');
        $I->see('КОНТАКТИ', 'h2');
        $I->see('+38(066)060-16-19');
        $I->see('+38(057)707-68-24', '#kharazii > p');
        $I->see('imconf@gmail.com');
        $I->see('anjashechka');
        $I->see('+38(050)984-69-79');
        $I->see('+38(057)707-68-24', '#lobach > p');
        $I->see('publish.conf@gmail.com');
        $I->see('helena_0900');
    }
}