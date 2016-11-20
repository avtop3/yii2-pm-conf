<?php
/**
 * @var array $result
 */
$this->title = 'Conference archive 2016 | International Conference in Project, Program, and Portfolio Management';
?>
<section id="insidePhoto">
    <div class="container">
        <h2>Conference archive 2016</h2>

        <div class="tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-1" data-toggle="tab" class="hvr-bubble-bottom"><i
                            class="fa fa-picture-o" aria-hidden="true"></i> PHOTOGALLERY</a></li>
                <li><a href="#tab-2" data-toggle="tab" class="hvr-bubble-bottom"><i class="fa fa-list-alt"
                                                                                    aria-hidden="true"></i> PRESENTATIONS</a></li>
                <li><a href="#tab-3" data-toggle="tab" class="hvr-bubble-bottom"><i class="fa fa-sticky-note-o"
                                                                                    aria-hidden="true"></i> PAPERS</a>
                </li>
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
                        <a href="javascript:;" data-folder-name="2016/presentations/01">
                            <img src="/markup/images/archive/2016/presentations/01/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/02">
                            <img src="/markup/images/archive/2016/presentations/02/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/03">
                            <img src="/markup/images/archive/2016/presentations/03/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/04">
                            <img src="/markup/images/archive/2016/presentations/04/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/05">
                            <img src="/markup/images/archive/2016/presentations/05/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/06">
                            <img src="/markup/images/archive/2016/presentations/06/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/07">
                            <img src="/markup/images/archive/2016/presentations/07/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/08">
                            <img src="/markup/images/archive/2016/presentations/08/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/09">
                            <img src="/markup/images/archive/2016/presentations/09/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/10">
                            <img src="/markup/images/archive/2016/presentations/10/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/11">
                            <img src="/markup/images/archive/2016/presentations/11/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/12">
                            <img src="/markup/images/archive/2016/presentations/12/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/13">
                            <img src="/markup/images/archive/2016/presentations/13/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/14">
                            <img src="/markup/images/archive/2016/presentations/14/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/15">
                            <img src="/markup/images/archive/2016/presentations/15/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/16">
                            <img src="/markup/images/archive/2016/presentations/16/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/17">
                            <img src="/markup/images/archive/2016/presentations/17/01.JPG" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a href="javascript:;" data-folder-name="2016/presentations/18">
                            <img src="/markup/images/archive/2016/presentations/18/01.JPG" alt="">
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <a href="../markup/images/archive/2016/ConferencePapers2016.rar" class="hvr-shutter-out-horizontal download" download>
                        <p>Download published papers</p> <i
                            class="fa fa-download" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
