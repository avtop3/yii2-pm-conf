<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10.04.2016
 * Time: 13:22
 */
/* @var $this yii\web\View */
/* @var $post \pendalf89\blog\models\Post */
use yii\helpers\Html;

$this->title = 'Hello';
?>

<div class="container">
    <div class="clients-area center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <h2>Спикеры конференции</h2>

        <p class="lead">Список спикоров конференции с краткой характиристикой докладчиков <br>
            И темы их докладов</p>
    </div>
    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class="panel panel-success wow fadeInDown animated"
                 style="visibility: visible; animation-name: fadeInDown;">
                <div class="panel-heading">
                    <h3><?= Html::encode($post->title) ?></h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-3">
                        <img src="<?= $post->getThumbnailUrl('medium') ?>" class="img-circle" alt="">
                    </div>
                    <div class="col-md-9">
                        <?= $post->content ?>
                    </div>
                </div>
                <div class="panel-footer">Panel footer</div>
            </div>
        <?php endforeach; ?>

    </div>
</div>