
<div class="blog-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <!-- single-blog-wrap Start -->
            <div class="single-blog-wrap mb-40">
                <div class="latest-blog-content mt-0">
                    <ul class="post-meta">
                        <li class="post-author">Bởi <a href="#">admin </a></li>
                        <li class="post-date"><?=date('d/m/Y')?></li>
                    </ul>
                </div>
                <div class="latest-blog-image">
                    <?= render($content['field_image'])?>
                </div>
                <div class="latest-blog-content mt-20">
                   <?= render($content['body'])?>
                </div>
                <div class="meta-sharing">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="entry-meta mt-15">
                                <?php if (!empty($content['field_tags'])){
                                    render($content['field_tags']);
                                }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-blog-wrap End -->
        </div>
    </div>






</div>
