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
$san_pham = false;
foreach ($node->field_chuyen_muc['und'] as $item) {
  if($item['tid'] == 2){
    $san_pham = true;
    break;
  }
}

if($san_pham):
?>

  <div class="row">
    <div class="col-lg-6">
      <?php print render($content['field_image']); ?>

      <div class="shop-detail-image">
        <div class="detail-slider">
          <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
              <?php print render($content['field_anh_lien_quan']); ?>
            </div>
            <!-- Add Arrows -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="shop-detail-contents mb-md-40 mt-md-40">
        <div class="shop-detail-content-wrapper">
          <h6 class="text-custom-black"><?=$title?></h6>
        </div>
        <div class="ratings d-flex mb-xl-20">
          <span class="text-yellow"><i class="fas fa-star"></i></span>
          <span class="text-yellow"><i class="fas fa-star"></i></span>
          <span class="text-yellow"><i class="fas fa-star"></i></span>
          <span class="text-yellow"><i class="fas fa-star"></i></span>
          <span class="text-yellow"><i class="fas fa-star"></i></span>
        </div>
          <div class="price">
              <h5 class="text-color-primary price-tag"><a href="tel:0888310638">Giá: <span class="color-red"><i class="fa fa-phone"></i> Liên hệ</span></a></h5>
          </div>
        <div class="product-full-des mb-20">
          <?php print $node->body['und'][0]['summary']; ?>
        </div>

        <div class="shop-bottom">
          <div class="shop-meta mt-20">
            <p class="text-custom-black mb-0 fw-600">Loại sản phẩm:</p>
            <?php print render($content['field_loai_san_pham']) ?>
          </div>
        </div>

        <?php print render($content['fblikebutton_field']); ?>
      </div>
    </div>
    <div class="col-12">
      <div class="shop-detail-description-sec">
        <div class="tabs">
          <ul class="nav nav-tabs">
            <li class="nav-item"> <a class="nav-link  active" data-toggle="tab" href="#description">Mô tả sản phẩm</a></li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#danh_gia_san_pham">Đánh giá sản phẩm</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="description">
              <?php print render($content['body']); ?>

              <div class="shop-meta mt-20">
                <p class="text-custom-black mb-0 fw-600">Tags:</p>
                <?php print render($content['field_tags'])?>
              </div>
            </div>
            <div class="tab-pane" id="danh_gia_san_pham">
              <?php print render($content['comments']); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php else: ?>
  <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php print $user_picture; ?>

    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
      <div class="submitted">
        <?php print $submitted; ?>
      </div>
    <?php endif; ?>

    <div class="content"<?php print $content_attributes; ?>>
      <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      unset($content['field_image']);

      print render($content);
      ?>
    </div>

  </div>
<?php endif; ?>

