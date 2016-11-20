<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class ArchiveByYearController extends Controller
{
    public function actionShow($year)
    {
        $webPathPrefix = sprintf('/markup/images/archive/%d/photogallery/', $year);
        $fileSystemPath = Yii::getAlias(sprintf('@public/markup/images/archive/%d/photogallery', $year));
        $jpgPaths = [];

        if (file_exists($fileSystemPath) && $allFiles = scandir($fileSystemPath)) {
            if (is_array($allFiles)) {
                $jpgFiles = array_filter(
                    $allFiles,
                    function ($value, $key) {
                        return (bool)preg_match('/jpg$/i', $value);
                    },
                    ARRAY_FILTER_USE_BOTH
                );

                foreach ($jpgFiles as $filename) {
                    $jpgPaths[] = $webPathPrefix . $filename;
                }
            }
        }

        return $this->render($year, ['result' => $jpgPaths]);
    }
}