<?php
/**
 * @var array $result
 */
$this->title = 'Архив конференции 2013 года | Международная конференция по управлению проектами, программами, портфелями';
?>

<section id="insidePhoto">
    <div class="container">
        <h2>Архив конференции 2013 года</h2>
        <div class="tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-1" data-toggle="tab" class="hvr-bubble-bottom"><i class="fa fa-picture-o" aria-hidden="true"></i> Фотоархив конференции</a></li>
                <li><a href="#tab-2" data-toggle="tab" class="hvr-bubble-bottom"><i class="fa fa-list-alt" aria-hidden="true"></i> Презентации докладов</a></li>
                <li><a href="#tab-3" data-toggle="tab" class="hvr-bubble-bottom"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Статьи</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                   <div class="tab-gallery">
                       <?php foreach($result as $item): ?>
                        <a class="gallery" rel="group" href="<?php echo $item; ?>">
                           <img src="<?php echo $item; ?>" class="img-responsive"/>
                        </a>
                        <?php endforeach; ?>
                   </div>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/01">
                            <img src="/markup/images/archive/2013/presentations/01/01.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/02">
                            <img src="/markup/images/archive/2013/presentations/02/01_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/03">
                            <img src="/markup/images/archive/2013/presentations/03/01_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/04">
                            <img src="/markup/images/archive/2013/presentations/04/1_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/05">
                            <img src="/markup/images/archive/2013/presentations/05/01_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/06">
                            <img src="/markup/images/archive/2013/presentations/06/1_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/07">
                            <img src="/markup/images/archive/2013/presentations/07/01_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/08">
                            <img src="/markup/images/archive/2013/presentations/08/01_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/09">
                            <img src="/markup/images/archive/2013/presentations/09/1_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/10">
                            <img src="/markup/images/archive/2013/presentations/10/1_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/11">
                            <img src="/markup/images/archive/2013/presentations/11/1_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/12">
                            <img src="/markup/images/archive/2013/presentations/12/1_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/13">
                            <img src="/markup/images/archive/2013/presentations/13/1_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/14">
                            <img src="/markup/images/archive/2013/presentations/14/1_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/15">
                            <img src="/markup/images/archive/2013/presentations/15/05_745_515_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/16">
                            <img src="/markup/images/archive/2013/presentations/16/01_745_558_95.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2013/presentations/17">
                            <img src="/markup/images/archive/2013/presentations/17/1_745_558_95.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <a href="../markup/images/archive/2013/ConferencePapers2013.rar" class="hvr-shutter-out-horizontal download" download>
                        <p>Скачать опубликованные статьи</p> <i class="fa fa-download" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
