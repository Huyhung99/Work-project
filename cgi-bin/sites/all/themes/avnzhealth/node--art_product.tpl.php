<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   kickstart, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   kickstart, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<div id="shopify-section-product-template" class="shopify-section">
    <div class="detail-content-inner" itemscope="">
        <div id="product" class="neque-porro-quisquam-est-qui-dolor-ipsum-quia-9 detail-content">
            <h1 itemprop="name" class="title"><?= strip_tags(render($content['product:title_field'])); ?></h1>

            <div class="row">
                <div class="col-md-8">
                    <div class="col-md-6 col-md-offset-3 product detail-product">
                        <div class="hoverBorder container_item">
                            <?php print (strpos(render($content['product:status']), 'Active') === false ? '<span class="sale_banner"><span class="sale_text">SOLD</span></span>' : '') ?>
                            <div class="hoverBorderWrapper">
                                <?php print render($content['field_image']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <?php print render($content['product:field_images']); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="product-information">
                      <?php
                      $tien_goc=floatval(strip_tags(str_replace('₫','',render($content['product:commerce_price']['#items'][0]['original']['amount']))));
                      $tien_ban=floatval(strip_tags(str_replace('₫','',render($content['product:commerce_price']['#object']->commerce_price['und'][0]['amount']))));
                      $tien_tk= $tien_goc-$tien_ban;
                      ?>
                        <div class="product-price">
                            <h2 class="price">
                              <?= strip_tags(str_replace('₫','',render($content['product:commerce_price']))); ?>đ
                            </h2>
                          <?php if($tien_tk!=0):?>
                          <del class="price-del"><?= number_format(strip_tags(str_replace('₫','',render($content['product:commerce_price']['#items'][0]['original']['amount']))),'0',',','.'); ?>đ</del>
                          <?php endif;?>
                        </div>
                      <?php if($tien_tk!=0):?>
                        <p class="price-savings price">Tiền tiết kiệm được: <span><?= number_format($tien_tk,'0',',','.');?>đ</span></p>
                      <?php endif;?>
                      <div class="vendor-type">
                            <p class="product_sku">
                                <span class="_title"><strong>Mã Sản Phẩm: </strong> </span><?= $content['product:sku']['#sku'] ?>
                            </p>
                        </div>
                        <div class="purchase">
                            <?= render($content['field_product']); ?>
                        </div>




                    </div>
                    <div class="vendor-type pt-25">
                        <p class="product_type"><span
                                    class="_title"><strong>Danh mục: </strong></span> <?= substr(implode(', <a', explode('<a',
                                strip_tags(render($content['field_categories']), ',<a>')
                            )),1) ?>
                        </p>
                    </div>
                </div>
            </div>



            <div id="tabs-information">
                <div class="information_content panel panel-default">
                    <div class="panel-heading" role="tab" id="heading_des">
                        <h4 class="panel-title" data-toggle="collapse" href="#collapse_des" aria-expanded="true"
                            aria-controls="collapse_des">
                            Mô tả sản phẩm
                            <i class="fa-icon fa fa-angle-up"></i>
                        </h4>
                    </div>
                    <div id="collapse_des" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="heading_des" aria-expanded="true" style="">
                        <div class="panel-body">
                            <div class="description" itemprop="description">
                                <?php if (!empty($node->body['und'][0]['value'])) print render($node->body['und'][0]['value']); ?>
                              <?php print render($content['fblikebutton_field']); ?>
                                <div class="shop-meta mt-20">
<!--                                    <p class="text-custom-black mb-0 fw-600">Từ Khóa:</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading" role="tab" id="heading_des">
                        <h4 class="panel-title" data-toggle="collapse" href="#comments" aria-expanded="true"
                            aria-controls="collapse_des">
                            Bình luận
                            <i class="fa-icon fa fa-angle-up"></i>
                        </h4>
                    </div>
                    <div id="comments" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="heading_des" aria-expanded="true" style="">
                        <div class="panel-body">
                            <div class="description" itemprop="description">
                                <?php print render($content['comments']); ?>
                                <div class="shop-meta mt-20">
                                    <!--                                    <p class="text-custom-black mb-0 fw-600">Từ Khóa:</p>-->
                                    <!--                                    --><?php //print render($content['field_tags']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


