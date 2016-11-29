<?php

namespace backend\tests\functional;

use \backend\tests\FunctionalTester;
use common\fixtures\User as UserFixture;

/**
 * Class LoginCest
 */
class LoginCest
{
    public function _before(FunctionalTester $I)
    {
        $I->haveFixtures([
            'user' => [
                'class' => UserFixture::className(),
                'dataFile' => codecept_data_dir() . 'login_data.php'
            ]
        ]);
    }

    /**
     * @param FunctionalTester $I
     */
    public function loginUser(FunctionalTester $I)
    {
        $I->amOnPage('/yii2-admin/site/login');
        $I->seeInCurrentUrl('/yii2-admin/site/login');
        $I->see('Войти', 'h1');
        $I->fillField('#loginform-username', 'tester');
        $I->fillField('#loginform-password', 'tester');
        $I->click('login-button');

        $I->seeInCurrentUrl('/yii2-admin');
        $I->canSeeLink('Участники конференции', '/yii2-admin/member/index');
        $I->canSeeLink('Ожидают подтверждения', '/yii2-admin/member/last-members');
        $I->canSeeLink('Организации', '/yii2-admin/member/org');
        $I->canSeeLink('Рассылка', '/yii2-admin/member/bulk-email');
        $I->canSeeLink('PDF', '/yii2-admin/members-file/index');
    }
}
