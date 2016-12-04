<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class ArchiveCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage('/archive');
        $I->see('Архив конференции','h2');
        $I->see('VII Международная конференция','h2');
        $I->seeLink('Подробнее...','/2016');
        $I->see('VI Международная конференция','h2');
        $I->seeLink('Подробнее...','/2015');
        $I->see('V Международная конференция','h2');
        $I->seeLink('Подробнее...','/2014');
        $I->see('IV Международная конференция','h2');
        $I->seeLink('Подробнее...','/2013');
        $I->see('III Международная конференция','h2');
        $I->seeLink('Подробнее...','/2012');
        $I->see('II Международная конференция','h2');
        $I->seeLink('Подробнее...','/2011');
        $I->see('I Международная конференция','h2');
        $I->seeLink('Подробнее...','/2010');

        $I->amOnPage('/en/archive');
        $I->see('СONFERENCE ARCHIVE','h2');
        $I->seeLink('Learn more','/en/2016');
        $I->seeLink('Learn more','/en/2015');
        $I->seeLink('Learn more','/en/2014');
        $I->seeLink('Learn more','/en/2013');
        $I->seeLink('Learn more','/en/2012');
        $I->seeLink('Learn more','/en/2011');
        $I->seeLink('Learn more','/en/2010');

        $I->amOnPage('/uk/archive');
        $I->see('АРХІВ КОНФЕРЕНЦІЙ','h2');
        $I->seeLink('Детальніше...','/uk/2016');
        $I->seeLink('Детальніше...','/uk/2015');
        $I->seeLink('Детальніше...','/uk/2014');
        $I->seeLink('Детальніше...','/uk/2013');
        $I->seeLink('Детальніше...','/uk/2012');
        $I->seeLink('Детальніше...','/uk/2011');
        $I->seeLink('Детальніше...','/uk/2010');
    }
}