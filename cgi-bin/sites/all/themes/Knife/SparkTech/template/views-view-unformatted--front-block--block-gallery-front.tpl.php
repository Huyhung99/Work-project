<?php
$images = explode(', ',$rows[0]);
?>
<div class="section section--footer">
    <div class="section__bg"></div>
    <div class="container">
        <div class="instagram">
            <div class="instagram__grid-wrapper">
                <div class="instagram__grid">
                    <div class="instagram__col">
                        <div class="instagram__subtitle">
                            <svg class="icon">
                                <use xlink:href="#icon-instagram"></use>
                            </svg>
                            FACEBOOK
                        </div>
                        <div class="block-title instagram__title">@SPARKTECHVIETNAM</div>
                        <div class="instagram__action">
                            <a href="#" class="btn" target="_blank">Xem thêm</a>
                        </div>
                    </div>
                    <div class="instagram__col">
                        <div class="instagram__images">
                            <?php foreach ($images as $image):?>
                                <div class="instagram__image">
                                    <?=$image?>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
