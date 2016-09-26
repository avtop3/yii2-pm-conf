<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 26.09.2016
 * Time: 20:30
 */

namespace frontend\modules\api\controllers;

use yii\rest\Controller;

class FileController extends Controller
{
    /**
     * Fetches list of files and directories.
     * The root path is public_html/markup/images/archive
     * Pass subFolder query param to access sub folder items
     *
     * @param string $subFolder
     * @return array
     */
    public function actionImages($subFolder = '/')
    {
        $result = [];
        $baseFolder = '/markup/images/archive/';
        $allItems = scandir(\Yii::getAlias('@webroot' . $baseFolder . $subFolder));

        foreach ($allItems as $name) {
            if (strlen($name) > 3) {
                $path = $this->clearPath(\Yii::getAlias('@web' . $baseFolder . $subFolder . '/' . $name));
                $result[] = [
                    'name' => $name,
                    'path' => $path,
                ];
            }
        }
        return $result;
    }

    /**
     *Removes empty directories in path like /foo///bar -> /foo/bar
     * @param $pathString
     * @return string
     */
    private function clearPath($pathString)
    {
        $pathPartsRaw = explode('/', $pathString);
        $pathParts = array_filter($pathPartsRaw);
        return '/' . implode('/', $pathParts);
    }
} 