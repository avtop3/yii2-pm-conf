<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 30.10.2016
 * Time: 11:42
 */

namespace backend\controllers;

use backend\modules\pdf\InvitePDF;
use common\models\Member;
use Dompdf\Dompdf;
use yii\helpers\FileHelper;
use yii\helpers\Inflector;
use yii\web\Controller;

class PdfController extends Controller
{
    /* @todo: Все таки надо вынести в модуль*/
    /* @todo: Менять язык контента PDF в зависимоти от страны мембера*/
    /* @todo: Добавить кнопку для ленивых "Сгенирироваь PDF & Отослать"*/
    public function actionInviteCreate($memberId)
    {
        $member = Member::findOne($memberId);
        if ($member) {
            $html = $this->renderFile('@backend/modules/pdf/views/invite/invite.php', ['member' => $member]);
            $domPdf = new Dompdf();
            $domPdf->loadHtml($html);
            $domPdf->setPaper('A4');
            $domPdf->render();
            $output = $domPdf->output();

            $result = file_put_contents(
                PdfController::getPdfPath($member),
                $output
            );
            if ($result) {
                \Yii::$app->session->addFlash('success', 'PDF created!');
            } else {
                \Yii::$app->session->addFlash('Error', 'Creating PDF fail!');
            }

            return $this->redirect(['/member/view', 'id' => $member->id]);
        }

        return $this->redirect(['/member/index']);
    }

    public function actionInviteView($memberId)
    {
        $member = Member::findOne($memberId);
        $path = PdfController::getPdfPath($member);
        if ($member && file_exists($path)) {
            return \Yii::$app->response->sendFile($path, basename($path), ['inline' => true]);
        }else{
            \Yii::$app->session->setFlash('error', 'Member or PDF file were not found');
        }

        return $this->redirect('/');
    }

    public function actionInviteDownload($memberId)
    {
        $member = Member::findOne($memberId);
        $path = PdfController::getPdfPath($member);
        if ($member && file_exists($path)) {
            return \Yii::$app->response->sendFile($path, basename($path), ['inline' => false]);
        }else{
            \Yii::$app->session->setFlash('error', 'Member or PDF file were not found');
        }

        return $this->redirect('');
    }

    public static function getPdfPath(Member $member)
    {
        $memberNameSlug = $member->id . '_' . Inflector::slug($member->nameEng);

        $dir = \Yii::getAlias('@backend/modules/pdf/invitations/' . date('Y'));
        if (!file_exists($dir)) {
            FileHelper::createDirectory($dir);
        }

        return $dir . '/official_invite_' . $memberNameSlug . '.pdf';
    }
} 