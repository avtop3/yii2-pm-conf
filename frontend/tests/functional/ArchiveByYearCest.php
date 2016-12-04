<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class ArchiveByYearCest
{

    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage('/2016');
        $I->see('Архив конференции 2016 года', 'h2');

        $I->amOnPage('/2015');
        $I->see('Архив конференции 2015 года', 'h2');

        $I->amOnPage('/2014');
        $I->see('Архив конференции 2014 года', 'h2');

        $I->amOnPage('/2013');
        $I->see('Архив конференции 2013 года', 'h2');

        $I->amOnPage('/2013');
        $I->see('Архив конференции 2013 года', 'h2');

        $I->amOnPage('/2012');
        $I->see('Архив конференции 2012 года', 'h2');

        $I->amOnPage('/2011');
        $I->see('Архив конференции 2011 года', 'h2');

        $I->amOnPage('/2010');
        $I->see('Архив конференции 2010 года', 'h2');

        /**
         * English
         */
        $I->amOnPage('/en/2016');
        $I->see('Conference archive 2016', 'h2');

        $I->amOnPage('/en/2015');
        $I->see('Conference archive 2015', 'h2');

        $I->amOnPage('/en/2014');
        $I->see('Conference archive 2014', 'h2');

        $I->amOnPage('/en/2013');
        $I->see('Conference archive 2013', 'h2');

        $I->amOnPage('/en/2013');
        $I->see('Conference archive 2013', 'h2');

        $I->amOnPage('/en/2012');
        $I->see('Conference archive 2012', 'h2');

        $I->amOnPage('/en/2011');
        $I->see('Conference archive 2011', 'h2');

        $I->amOnPage('/en/2010');
        $I->see('Conference archive 2010', 'h2');

        /**
         * Ukrainian
         */
        $I->amOnPage('/uk/2016');
        $I->see('АРХІВ КОНФЕРЕНЦІЇ 2016 РОКУ', 'h2');

        $I->amOnPage('/uk/2015');
        $I->see('АРХІВ КОНФЕРЕНЦІЇ 2015 РОКУ', 'h2');

        $I->amOnPage('/uk/2014');
        $I->see('АРХІВ КОНФЕРЕНЦІЇ 2014 РОКУ', 'h2');

        $I->amOnPage('/uk/2013');
        $I->see('АРХІВ КОНФЕРЕНЦІЇ 2013 РОКУ', 'h2');

        $I->amOnPage('/uk/2013');
        $I->see('АРХІВ КОНФЕРЕНЦІЇ 2013 РОКУ', 'h2');

        $I->amOnPage('/uk/2012');
        $I->see('АРХІВ КОНФЕРЕНЦІЇ 2012 РОКУ', 'h2');

        $I->amOnPage('/uk/2011');
        $I->see('АРХІВ КОНФЕРЕНЦІЇ 2011 РОКУ', 'h2');

        $I->amOnPage('/uk/2010');
        $I->see('АРХІВ КОНФЕРЕНЦІЇ 2010 РОКУ', 'h2');
    }
}