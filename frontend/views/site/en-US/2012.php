<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.06.2016
 * Time: 22:51
 */

$this->title = 'Conference archive 2012';
?>
<section id="insidePhoto">
    <div class="container">
        <h2><?= $this->title ?></h2>
        <div class="tabs">
            <?= $this->render('archive-menu.php') ?>
            <div class="tab-content">
                <div class="tab-pane fade" id="tab-1">

                </div>
                <div class="tab-pane fade" id="tab-2">

                </div>
                <div class="tab-pane fade in active" id="tab-3">
                    <a href="" class="hvr-shutter-out-horizontal download">
                        <p>Download published papers</p> <i class="fa fa-download" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
