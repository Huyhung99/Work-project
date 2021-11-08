<section id="call-to-action" class="call-to-action-section core-feature-section">
    <div class="parallax-bg position-relative" data-background="/sites/all/themes/Linkhouse/assets/img/banner/cbg.jpg" data-jarallax-original-styles="background-image: url(&quot;/sites/all/themes/Linkhouse/assets/img/banner/cbg.jpg&quot;); z-index: 0; background-attachment: scroll; background-size: auto;" style="background-image: none; z-index: 0; background-attachment: scroll; background-size: auto;">
        <div class="background-overlay">&nbsp;</div>
        <div class="container">
            <div class="call-to-action-content">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="https://kitchentown.vn/lib/uploads/2018/08/precious-comfort.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <div class="box-call-to-action">
                            <div class="call-to-action-text mb-20">
                                <div class="section-title title-left text-left title-three headline">
                                    <h2>Để lại thông tin</h2>
                                </div>
                            </div>
                            <div class="call-to-action-form position-relative">
                                <?php
                                $node = node_load(79);
                                webform_node_view($node,'full');
                                print theme_webform_view($node->content);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
