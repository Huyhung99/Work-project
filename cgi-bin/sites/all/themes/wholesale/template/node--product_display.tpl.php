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
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
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
<div class="container margin_30">
    <div class="row">
        <div class="col-md-6">
            <?php print render($content['field_image']); ?>
            <div class="product-thumbnail">
                <?php print render($content['product:field_images']); ?>
            </div>
        </div>
        <div class="col-md-6">
            <!-- /page_header -->
            <div class="prod_info">
                <h2><?=$node->title?></h2>
                <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></span><br>
                <span class="sku">Mã sản phẩm: <?=$content['product:sku']['#sku']?></span><br>
                <p><?= render($content['field_tom_tat_dac_tinh_san_pham'])?></p>
                <?php if ($logged_in):?>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="label-product">
                            <span class="title-quantity">Số lượng</span>
                            <div class="price_main">
                                <?php
                                $new_price = $content['product:commerce_price']['#items'][0]['amount'];
                                $old_price = $content['product:commerce_price']['#items'][0]['original']['amount'];?>
                                <?php if ($new_price!=$old_price):?>
                                    <span class="new_price"><?='£'.substr_replace($new_price,'.',strlen($content['product:commerce_price']['#items'][0]['amount'])-2,0)?></span>
                                    <span class="old_price"><?='£'.substr_replace($old_price,'.',strlen($content['product:commerce_price']['#items'][0]['original']['amount'])-2,0) ?></span>
                                <?php else:?>
                                    <span class="title-price">Giá: </span>
                                    <span class="new_price"><?='£'.substr_replace($new_price,'.',strlen($content['product:commerce_price']['#items'][0]['original']['amount'])-2,0) ?></span>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-5 col-md-6">
                            <?= render($content['field_product'])?>
                        </div>
                </div>
                <?php endif;?>
            </div>
            <!-- /prod_info -->
            <!-- /product_actions -->
        </div>
    </div>
    <!-- /row -->
</div>
<div class="tab_content_wrapper">
    <div class="container">
        <div class="tab-content" role="tablist">
            <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
                <div class="card-header" role="tab" id="heading-A">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
                            Mô tả
                        </a>
                    </h5>
                </div>
                <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                    <div class="card-body">
                        <div class="justify-content-between">
                            <?= render($content['body'])?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /TAB A -->
            <!-- /tab B -->
        </div>
        <!-- /tab-content -->
    </div>
    <!-- /container -->
</div>
