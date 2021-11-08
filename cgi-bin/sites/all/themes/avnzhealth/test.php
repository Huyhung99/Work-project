<?php
$view = new view();
$view->name = 'tin_tuc';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Tin tức';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Tin tức';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['exposed_form']['options']['reset_button_label'] = 'Thiết lập lại';
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '10';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['style_options']['default_row_class'] = FALSE;
$handler->display->display_options['style_options']['row_class_special'] = FALSE;
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['row_options']['default_field_elements'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
/* Trường: Nội dung: Hình ảnh */
$handler->display->display_options['fields']['field_image']['id'] = 'field_image';
$handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image']['label'] = '';
$handler->display->display_options['fields']['field_image']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image']['settings'] = array(
  'image_style' => '',
  'image_link' => 'content',
  'class' => '',
);
/* Trường: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
/* Filter criterion: Nội dung: Published status */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Nội dung: Kiểu */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'bai_viet' => 'bai_viet',
);

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['style_options']['default_row_class'] = FALSE;
$handler->display->display_options['style_options']['row_class_special'] = FALSE;
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['row_options']['default_field_elements'] = FALSE;
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['exclude'] = TRUE;
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Body */
$handler->display->display_options['fields']['body']['id'] = 'body';
$handler->display->display_options['fields']['body']['table'] = 'field_data_body';
$handler->display->display_options['fields']['body']['field'] = 'body';
$handler->display->display_options['fields']['body']['label'] = '';
$handler->display->display_options['fields']['body']['exclude'] = TRUE;
$handler->display->display_options['fields']['body']['alter']['max_length'] = '600';
$handler->display->display_options['fields']['body']['alter']['strip_tags'] = TRUE;
$handler->display->display_options['fields']['body']['alter']['trim'] = TRUE;
$handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
$handler->display->display_options['fields']['body']['settings'] = array(
  'trim_length' => '600',
  'class' => '',
);
/* Trường: Nội dung: Post date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'node';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = '';
$handler->display->display_options['fields']['created']['exclude'] = TRUE;
$handler->display->display_options['fields']['created']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['created']['date_format'] = 'custom';
$handler->display->display_options['fields']['created']['custom_date_format'] = 'd/m/Y';
$handler->display->display_options['fields']['created']['second_date_format'] = 'long';
/* Trường: Nội dung: Đường dẫn */
$handler->display->display_options['fields']['path']['id'] = 'path';
$handler->display->display_options['fields']['path']['table'] = 'node';
$handler->display->display_options['fields']['path']['field'] = 'path';
$handler->display->display_options['fields']['path']['label'] = '';
$handler->display->display_options['fields']['path']['exclude'] = TRUE;
$handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Hình ảnh */
$handler->display->display_options['fields']['field_image']['id'] = 'field_image';
$handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image']['label'] = '';
$handler->display->display_options['fields']['field_image']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image']['type'] = 'image_url';
$handler->display->display_options['fields']['field_image']['settings'] = array(
  'url_type' => '1',
  'image_style' => '400x250',
  'image_link' => '',
  'class' => 'img-responsive',
);
/* Trường: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="article clearfix blog_List">

        <a href="[path]" class="article-image"><img src="[field_image]"></a>

    <div class="articleinfo_group">
        <div class="article-title">
            <h2 class="article-name">[title]</h2>
        </div>
        <ul class="article-info list-inline">
            <li class="article-date"><i class="fa fa-clock-o"></i> [created]</li>
        </ul>
        <div class="article-content">
            <p>[body]</p>
        </div>
    </div>
</div>';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
$handler->display->display_options['path'] = 'tin-tuc';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Tin tức';
$handler->display->display_options['menu']['name'] = 'main-menu';

/* Display: Bài viết liên quan */
$handler = $view->new_display('block', 'Bài viết liên quan', 'block_1');
$handler->display->display_options['defaults']['arguments'] = FALSE;
/* Contextual filter: Nội dung: Has taxonomy term ID */
$handler->display->display_options['arguments']['tid']['id'] = 'tid';
$handler->display->display_options['arguments']['tid']['table'] = 'taxonomy_index';
$handler->display->display_options['arguments']['tid']['field'] = 'tid';
$handler->display->display_options['arguments']['tid']['default_action'] = 'default';
$handler->display->display_options['arguments']['tid']['exception']['title'] = 'Tất cả';
$handler->display->display_options['arguments']['tid']['default_argument_type'] = 'taxonomy_tid';
$handler->display->display_options['arguments']['tid']['default_argument_options']['node'] = TRUE;
$handler->display->display_options['arguments']['tid']['default_argument_options']['vocabularies'] = array(
  'chuyen_muc' => 'chuyen_muc',
  'tags' => 'tags',
);
$handler->display->display_options['arguments']['tid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['tid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['tid']['summary_options']['items_per_page'] = '25';
/* Contextual filter: Nội dung: Has taxonomy term ID (with depth) */
$handler->display->display_options['arguments']['term_node_tid_depth']['id'] = 'term_node_tid_depth';
$handler->display->display_options['arguments']['term_node_tid_depth']['table'] = 'node';
$handler->display->display_options['arguments']['term_node_tid_depth']['field'] = 'term_node_tid_depth';
$handler->display->display_options['arguments']['term_node_tid_depth']['default_action'] = 'default';
$handler->display->display_options['arguments']['term_node_tid_depth']['exception']['title'] = 'Tất cả';
$handler->display->display_options['arguments']['term_node_tid_depth']['default_argument_type'] = 'taxonomy_tid';
$handler->display->display_options['arguments']['term_node_tid_depth']['default_argument_options']['node'] = TRUE;
$handler->display->display_options['arguments']['term_node_tid_depth']['default_argument_options']['vocabularies'] = array(
  'chuyen_muc' => 'chuyen_muc',
  'tags' => 'tags',
);
$handler->display->display_options['arguments']['term_node_tid_depth']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['term_node_tid_depth']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['term_node_tid_depth']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['term_node_tid_depth']['depth'] = '0';

/* Display: Sản phẩm bán chạy Front */
$handler = $view->new_display('block', 'Sản phẩm bán chạy Front', 'block_sp_ban_chay_front');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Sản phẩm bán chạy';
$handler->display->display_options['defaults']['pager'] = FALSE;
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '12';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['defaults']['header'] = FALSE;
/* Tiêu đề: Global: Text area */
$handler->display->display_options['header']['area']['id'] = 'area';
$handler->display->display_options['header']['area']['table'] = 'views';
$handler->display->display_options['header']['area']['field'] = 'area';
$handler->display->display_options['header']['area']['content'] = '<div class="container"><div class="row">
	<div class="prosli_group">
<div class="page-title">
	<h2>Sản phẩm bán chạy</h2>
</div></div>
</div>
</div>';
$handler->display->display_options['header']['area']['format'] = 'full_html';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Trường: Nội dung: Hình ảnh */
$handler->display->display_options['fields']['field_image']['id'] = 'field_image';
$handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image']['label'] = '';
$handler->display->display_options['fields']['field_image']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image']['settings'] = array(
  'image_style' => '300x300',
  'image_link' => '',
  'class' => 'not-rotation img-responsive front',
);
/* Trường: Nội dung: Link */
$handler->display->display_options['fields']['field_link']['id'] = 'field_link';
$handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
$handler->display->display_options['fields']['field_link']['field'] = 'field_link';
$handler->display->display_options['fields']['field_link']['label'] = '';
$handler->display->display_options['fields']['field_link']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_link']['settings'] = array(
  'class' => '',
);

/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['exclude'] = TRUE;
$handler->display->display_options['fields']['title']['alter']['max_length'] = '30';
$handler->display->display_options['fields']['title']['alter']['trim'] = TRUE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Đường dẫn */
$handler->display->display_options['fields']['path']['id'] = 'path';
$handler->display->display_options['fields']['path']['table'] = 'node';
$handler->display->display_options['fields']['path']['field'] = 'path';
$handler->display->display_options['fields']['path']['label'] = '';
$handler->display->display_options['fields']['path']['exclude'] = TRUE;
$handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title_1']['id'] = 'title_1';
$handler->display->display_options['fields']['title_1']['table'] = 'node';
$handler->display->display_options['fields']['title_1']['field'] = 'title';
$handler->display->display_options['fields']['title_1']['label'] = '';
$handler->display->display_options['fields']['title_1']['exclude'] = TRUE;
$handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['title_1']['link_to_node'] = FALSE;
/* Trường: Nội dung: Hình ảnh */
$handler->display->display_options['fields']['field_image_1']['id'] = 'field_image_1';
$handler->display->display_options['fields']['field_image_1']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image_1']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image_1']['label'] = '';
$handler->display->display_options['fields']['field_image_1']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image_1']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image_1']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image_1']['settings'] = array(
  'image_style' => '300x300',
  'image_link' => '',
  'class' => 'rotation img-responsive',
);
/* Trường: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="row-container product list-unstyled clearfix">
														<div class="row-left">
															<a href="[path]" title="[title_1]" class="hoverBorder container_item">
																<div class="hoverBorderWrapper">
																	[field_image]
																	<div class="mask"></div>
																	[field_image_1]
																</div>
															</a>

															<div class="hover-mask">
																<div class="group-mask">
																	<div class="inner-mask">
																		<div class="group-actionbutton">

																			<ul class="quickview-wishlist-wrapper">
																				<li class="quickview hidden-xs hidden-sm">
																					<div class="product-ajax-cart">
																						<span class="overlay_mask"></span>
																						<div data-handle="neque-porro-quisquam-est-qui-dolor-ipsum-quia-11" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																							<a class="[path]" title="[title_1]"><i class="fa fa-search" title="Xem nhanh"></i></a>
																						</div>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<!--inner-mask-->
																</div>
																<!--Group mask-->
															</div>
														</div>
														<div class="row-right animMix">
															<div class="product-title"><h3>[title]</h3></div>
														</div>
													</div>';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: Global: Random */
$handler->display->display_options['sorts']['random']['id'] = 'random';
$handler->display->display_options['sorts']['random']['table'] = 'views';
$handler->display->display_options['sorts']['random']['field'] = 'random';
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Nội dung: Published status */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Nội dung: Kiểu */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'san_pham' => 'san_pham',
);

/* Display: Sản phẩm mới về */
$handler = $view->new_display('block', 'Sản phẩm mới về', 'block_hang_moi_ve');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Sản phẩm bán chạy';
$handler->display->display_options['defaults']['pager'] = FALSE;
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '12';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['defaults']['header'] = FALSE;
/* Tiêu đề: Global: Text area */
$handler->display->display_options['header']['area']['id'] = 'area';
$handler->display->display_options['header']['area']['table'] = 'views';
$handler->display->display_options['header']['area']['field'] = 'area';
$handler->display->display_options['header']['area']['content'] = '<div class="container"><div class="row">
	<div class="prosli_group">
<div class="page-title">
	<h2>Sản phẩm mới về</h2>
</div></div>
</div>
</div>';
$handler->display->display_options['header']['area']['format'] = 'full_html';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Trường: Nội dung: Hình ảnh */
$handler->display->display_options['fields']['field_image']['id'] = 'field_image';
$handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image']['label'] = '';
$handler->display->display_options['fields']['field_image']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image']['settings'] = array(
  'image_style' => '300x300',
  'image_link' => '',
  'class' => 'not-rotation img-responsive front',
);
/* Trường: Nội dung: Link */
$handler->display->display_options['fields']['field_link']['id'] = 'field_link';
$handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
$handler->display->display_options['fields']['field_link']['field'] = 'field_link';
$handler->display->display_options['fields']['field_link']['label'] = '';
$handler->display->display_options['fields']['field_link']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_link']['settings'] = array(
  'class' => '',
);

/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['exclude'] = TRUE;
$handler->display->display_options['fields']['title']['alter']['max_length'] = '30';
$handler->display->display_options['fields']['title']['alter']['trim'] = TRUE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Đường dẫn */
$handler->display->display_options['fields']['path']['id'] = 'path';
$handler->display->display_options['fields']['path']['table'] = 'node';
$handler->display->display_options['fields']['path']['field'] = 'path';
$handler->display->display_options['fields']['path']['label'] = '';
$handler->display->display_options['fields']['path']['exclude'] = TRUE;
$handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title_1']['id'] = 'title_1';
$handler->display->display_options['fields']['title_1']['table'] = 'node';
$handler->display->display_options['fields']['title_1']['field'] = 'title';
$handler->display->display_options['fields']['title_1']['label'] = '';
$handler->display->display_options['fields']['title_1']['exclude'] = TRUE;
$handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['title_1']['link_to_node'] = FALSE;
/* Trường: Nội dung: Hình ảnh */
$handler->display->display_options['fields']['field_image_1']['id'] = 'field_image_1';
$handler->display->display_options['fields']['field_image_1']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image_1']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image_1']['label'] = '';
$handler->display->display_options['fields']['field_image_1']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image_1']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image_1']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image_1']['settings'] = array(
  'image_style' => '300x300',
  'image_link' => '',
  'class' => 'rotation img-responsive',
);
/* Trường: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="row-container product list-unstyled clearfix">
														<div class="row-left">
															<a href="[path]" title="[title_1]" class="hoverBorder container_item">
																<div class="hoverBorderWrapper">
																	[field_image]
																	<div class="mask"></div>
																	[field_image_1]
																</div>
															</a>

															<div class="hover-mask">
																<div class="group-mask">
																	<div class="inner-mask">
																		<div class="group-actionbutton">

																			<ul class="quickview-wishlist-wrapper">
																				<li class="quickview hidden-xs hidden-sm">
																					<div class="product-ajax-cart">
																						<span class="overlay_mask"></span>
																						<div data-handle="neque-porro-quisquam-est-qui-dolor-ipsum-quia-11" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																							<a class="[path]" title="[title_1]"><i class="fa fa-search" title="Xem nhanh"></i></a>
																						</div>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<!--inner-mask-->
																</div>
																<!--Group mask-->
															</div>
														</div>
														<div class="row-right animMix">
															<div class="product-title"><h3>[title]</h3></div>

														</div>
													</div>';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: Global: Random */
$handler->display->display_options['sorts']['random']['id'] = 'random';
$handler->display->display_options['sorts']['random']['table'] = 'views';
$handler->display->display_options['sorts']['random']['field'] = 'random';
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Nội dung: Published status */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Nội dung: Kiểu */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'san_pham' => 'san_pham',
);

/* Display: Mặt hàng mới giảm giá */
$handler = $view->new_display('block', 'Mặt hàng mới giảm giá', 'block_2');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Mặt hàng mới giảm giá';
$handler->display->display_options['defaults']['pager'] = FALSE;
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '12';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['defaults']['header'] = FALSE;
/* Tiêu đề: Global: Text area */
$handler->display->display_options['header']['area']['id'] = 'area';
$handler->display->display_options['header']['area']['table'] = 'views';
$handler->display->display_options['header']['area']['field'] = 'area';
$handler->display->display_options['header']['area']['content'] = '<div class="container"><div class="row">
	<div class="prosli_group">
<div class="page-title">
	<h2>Mặt hàng mới giảm giá</h2>
</div></div>
</div>
</div>';
$handler->display->display_options['header']['area']['format'] = 'full_html';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Trường: Nội dung: Hình ảnh */
$handler->display->display_options['fields']['field_image']['id'] = 'field_image';
$handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image']['label'] = '';
$handler->display->display_options['fields']['field_image']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image']['settings'] = array(
  'image_style' => '300x300',
  'image_link' => '',
  'class' => 'not-rotation img-responsive front',
);
/* Trường: Nội dung: Link */
$handler->display->display_options['fields']['field_link']['id'] = 'field_link';
$handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
$handler->display->display_options['fields']['field_link']['field'] = 'field_link';
$handler->display->display_options['fields']['field_link']['label'] = '';
$handler->display->display_options['fields']['field_link']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_link']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_link']['settings'] = array(
  'class' => '',
);

/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['exclude'] = TRUE;
$handler->display->display_options['fields']['title']['alter']['max_length'] = '30';
$handler->display->display_options['fields']['title']['alter']['trim'] = TRUE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Đường dẫn */
$handler->display->display_options['fields']['path']['id'] = 'path';
$handler->display->display_options['fields']['path']['table'] = 'node';
$handler->display->display_options['fields']['path']['field'] = 'path';
$handler->display->display_options['fields']['path']['label'] = '';
$handler->display->display_options['fields']['path']['exclude'] = TRUE;
$handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title_1']['id'] = 'title_1';
$handler->display->display_options['fields']['title_1']['table'] = 'node';
$handler->display->display_options['fields']['title_1']['field'] = 'title';
$handler->display->display_options['fields']['title_1']['label'] = '';
$handler->display->display_options['fields']['title_1']['exclude'] = TRUE;
$handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['title_1']['link_to_node'] = FALSE;
/* Trường: Nội dung: Hình ảnh */
$handler->display->display_options['fields']['field_image_1']['id'] = 'field_image_1';
$handler->display->display_options['fields']['field_image_1']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image_1']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image_1']['label'] = '';
$handler->display->display_options['fields']['field_image_1']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image_1']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image_1']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image_1']['settings'] = array(
  'image_style' => '300x300',
  'image_link' => '',
  'class' => 'rotation img-responsive',
);
/* Trường: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="row-container product list-unstyled clearfix">
														<div class="row-left">
															<a href="[path]" title="[title_1]" class="hoverBorder container_item">
																<div class="hoverBorderWrapper">
																	[field_image]
																	<div class="mask"></div>
																	[field_image_1]
																</div>
															</a>

															<div class="hover-mask">
																<div class="group-mask">
																	<div class="inner-mask">
																		<div class="group-actionbutton">

																			<ul class="quickview-wishlist-wrapper">
																				<li class="quickview hidden-xs hidden-sm">
																					<div class="product-ajax-cart">
																						<span class="overlay_mask"></span>
																						<div data-handle="neque-porro-quisquam-est-qui-dolor-ipsum-quia-11" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																							<a class="[path]" title="[title_1]"><i class="fa fa-search" title="Xem nhanh"></i></a>
																						</div>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<!--inner-mask-->
																</div>
																<!--Group mask-->
															</div>
														</div>
														<div class="row-right animMix">
															<div class="product-title"><h3>[title]</h3></div>

														</div>
													</div>';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: Global: Random */
$handler->display->display_options['sorts']['random']['id'] = 'random';
$handler->display->display_options['sorts']['random']['table'] = 'views';
$handler->display->display_options['sorts']['random']['field'] = 'random';
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Nội dung: Published status */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Nội dung: Kiểu */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'san_pham' => 'san_pham',
);
$handler->display->display_options['block_description'] = 'Mặt hàng mới giảm giá';

/* Display: Slider */
$handler = $view->new_display('block', 'Slider', 'block_slider');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Slider';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['exclude'] = TRUE;
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Body */
$handler->display->display_options['fields']['body']['id'] = 'body';
$handler->display->display_options['fields']['body']['table'] = 'field_data_body';
$handler->display->display_options['fields']['body']['field'] = 'body';
$handler->display->display_options['fields']['body']['label'] = '';
$handler->display->display_options['fields']['body']['exclude'] = TRUE;
$handler->display->display_options['fields']['body']['alter']['max_length'] = '150';
$handler->display->display_options['fields']['body']['alter']['strip_tags'] = TRUE;
$handler->display->display_options['fields']['body']['alter']['trim'] = TRUE;
$handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
$handler->display->display_options['fields']['body']['settings'] = array(
  'trim_length' => '200',
  'class' => '',
);
/* Trường: Nội dung: Post date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'node';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = '';
$handler->display->display_options['fields']['created']['exclude'] = TRUE;
$handler->display->display_options['fields']['created']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['created']['date_format'] = 'custom';
$handler->display->display_options['fields']['created']['custom_date_format'] = 'd/m/Y';
$handler->display->display_options['fields']['created']['second_date_format'] = 'long';
/* Trường: Nội dung: Hình ảnh */
$handler->display->display_options['fields']['field_image']['id'] = 'field_image';
$handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image']['label'] = '';
$handler->display->display_options['fields']['field_image']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image']['settings'] = array(
  'image_style' => '1000x550',
  'image_link' => '',
  'class' => '',
);
/* Trường: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="item image">
    [field_image]
</div>';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Nội dung: Published status */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Nội dung: Kiểu */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'slider' => 'slider',
);
$handler->display->display_options['block_description'] = 'Slider';

/* Display: Tin tức nổi bật */
$handler = $view->new_display('block', 'Tin tức nổi bật', 'block_tin_tuc_noi_bat');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Tin tức nổi bật';
$handler->display->display_options['defaults']['pager'] = FALSE;
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '6';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['exclude'] = TRUE;
$handler->display->display_options['fields']['title']['alter']['max_length'] = '40';
$handler->display->display_options['fields']['title']['alter']['trim'] = TRUE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Body */
$handler->display->display_options['fields']['body']['id'] = 'body';
$handler->display->display_options['fields']['body']['table'] = 'field_data_body';
$handler->display->display_options['fields']['body']['field'] = 'body';
$handler->display->display_options['fields']['body']['label'] = '';
$handler->display->display_options['fields']['body']['exclude'] = TRUE;
$handler->display->display_options['fields']['body']['alter']['max_length'] = '150';
$handler->display->display_options['fields']['body']['alter']['strip_tags'] = TRUE;
$handler->display->display_options['fields']['body']['alter']['trim'] = TRUE;
$handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
$handler->display->display_options['fields']['body']['settings'] = array(
  'trim_length' => '200',
  'class' => '',
);
/* Trường: Nội dung: Post date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'node';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = '';
$handler->display->display_options['fields']['created']['exclude'] = TRUE;
$handler->display->display_options['fields']['created']['alter']['strip_tags'] = TRUE;
$handler->display->display_options['fields']['created']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['created']['date_format'] = 'custom';
$handler->display->display_options['fields']['created']['custom_date_format'] = 'd/m/Y';
$handler->display->display_options['fields']['created']['second_date_format'] = 'long';
/* Trường: Nội dung: Hình ảnh */
$handler->display->display_options['fields']['field_image']['id'] = 'field_image';
$handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image']['label'] = '';
$handler->display->display_options['fields']['field_image']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image']['type'] = 'image_url';
$handler->display->display_options['fields']['field_image']['settings'] = array(
  'url_type' => '1',
  'image_style' => '400x250',
  'image_link' => '',
  'class' => 'img-responsive',
);
/* Trường: Nội dung: Đường dẫn */
$handler->display->display_options['fields']['path']['id'] = 'path';
$handler->display->display_options['fields']['path']['table'] = 'node';
$handler->display->display_options['fields']['path']['field'] = 'path';
$handler->display->display_options['fields']['path']['label'] = '';
$handler->display->display_options['fields']['path']['exclude'] = TRUE;
$handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
/* Trường: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="article clearfix">
    <a href="[path]" class="article-image"><img src="[field_image]"></a>
    <div class="articleinfo_group">
        <div class="article-title">
            <h2 class="article-name">[title]</h2>
        </div>
        <ul class="article-info list-inline">
            <li class="article-date"><i class="fa fa-clock-o"></i> [created]</li>
        </ul>
    </div>
</div>';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: Global: Random */
$handler->display->display_options['sorts']['random']['id'] = 'random';
$handler->display->display_options['sorts']['random']['table'] = 'views';
$handler->display->display_options['sorts']['random']['field'] = 'random';
$handler->display->display_options['block_description'] = 'Tin tức nổi bật';

/* Display: Tin tức liên quan */
$handler = $view->new_display('block', 'Tin tức liên quan', 'block_tin_tuc_lien_quan');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Tin tức liên quan';
$handler->display->display_options['defaults']['pager'] = FALSE;
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '6';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['exclude'] = TRUE;
$handler->display->display_options['fields']['title']['alter']['max_length'] = '40';
$handler->display->display_options['fields']['title']['alter']['trim'] = TRUE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Body */
$handler->display->display_options['fields']['body']['id'] = 'body';
$handler->display->display_options['fields']['body']['table'] = 'field_data_body';
$handler->display->display_options['fields']['body']['field'] = 'body';
$handler->display->display_options['fields']['body']['label'] = '';
$handler->display->display_options['fields']['body']['exclude'] = TRUE;
$handler->display->display_options['fields']['body']['alter']['max_length'] = '150';
$handler->display->display_options['fields']['body']['alter']['strip_tags'] = TRUE;
$handler->display->display_options['fields']['body']['alter']['trim'] = TRUE;
$handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
$handler->display->display_options['fields']['body']['settings'] = array(
  'trim_length' => '200',
  'class' => '',
);
/* Trường: Nội dung: Post date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'node';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = '';
$handler->display->display_options['fields']['created']['exclude'] = TRUE;
$handler->display->display_options['fields']['created']['alter']['strip_tags'] = TRUE;
$handler->display->display_options['fields']['created']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['created']['date_format'] = 'custom';
$handler->display->display_options['fields']['created']['custom_date_format'] = 'd/m/Y';
$handler->display->display_options['fields']['created']['second_date_format'] = 'long';
/* Trường: Nội dung: Hình ảnh */
$handler->display->display_options['fields']['field_image']['id'] = 'field_image';
$handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image']['label'] = '';
$handler->display->display_options['fields']['field_image']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image']['type'] = 'image_url';
$handler->display->display_options['fields']['field_image']['settings'] = array(
  'url_type' => '1',
  'image_style' => '400x250',
  'image_link' => '',
  'class' => 'img-responsive',
);
/* Trường: Nội dung: Đường dẫn */
$handler->display->display_options['fields']['path']['id'] = 'path';
$handler->display->display_options['fields']['path']['table'] = 'node';
$handler->display->display_options['fields']['path']['field'] = 'path';
$handler->display->display_options['fields']['path']['label'] = '';
$handler->display->display_options['fields']['path']['exclude'] = TRUE;
$handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
/* Trường: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="article clearfix">
    <a href="[path]" class="article-image"><img src="[field_image]"></a>
    <div class="articleinfo_group">
        <div class="article-title">
            <h2 class="article-name">[title]</h2>
        </div>
        <ul class="article-info list-inline">
            <li class="article-date"><i class="fa fa-clock-o"></i> [created]</li>
        </ul>
    </div>
</div>';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: Global: Random */
$handler->display->display_options['sorts']['random']['id'] = 'random';
$handler->display->display_options['sorts']['random']['table'] = 'views';
$handler->display->display_options['sorts']['random']['field'] = 'random';
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Nội dung: Published status */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Nội dung: Kiểu */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'bai_viet' => 'bai_viet',
);
/* Filter criterion: Related Content: Content Type */
$handler->display->display_options['filters']['related_content_type']['id'] = 'related_content_type';
$handler->display->display_options['filters']['related_content_type']['table'] = 'node';
$handler->display->display_options['filters']['related_content_type']['field'] = 'related_content_type';
$handler->display->display_options['block_description'] = 'Tin tức liên quan';

/* Display: Icon ngành hàng */
$handler = $view->new_display('block', 'Icon ngành hàng', 'block_nganh_hang');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Ngành hàng';
$handler->display->display_options['defaults']['pager'] = FALSE;
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '20';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['exclude'] = TRUE;
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
/* Trường: Trường: Ảnh */
$handler->display->display_options['fields']['field_image_1']['id'] = 'field_image_1';
$handler->display->display_options['fields']['field_image_1']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image_1']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image_1']['label'] = '';
$handler->display->display_options['fields']['field_image_1']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image_1']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image_1']['settings'] = array(
  'image_style' => '',
  'image_link' => '',
  'class' => 'img-responsive nganh-hang-img',
);
/* Trường: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="nganh-hang-image">
    [field_image_1]
</div>';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Nội dung: Published status */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
$handler->display->display_options['block_description'] = 'Icon ngành hàng';

/* Display: Tin tức block front */
$handler = $view->new_display('block', 'Tin tức block front', 'block_front_tin_tuc');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Tin tức';
$handler->display->display_options['defaults']['pager'] = FALSE;
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '6';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['exclude'] = TRUE;
$handler->display->display_options['fields']['title']['alter']['max_length'] = '40';
$handler->display->display_options['fields']['title']['alter']['trim'] = TRUE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Body */
$handler->display->display_options['fields']['body']['id'] = 'body';
$handler->display->display_options['fields']['body']['table'] = 'field_data_body';
$handler->display->display_options['fields']['body']['field'] = 'body';
$handler->display->display_options['fields']['body']['label'] = '';
$handler->display->display_options['fields']['body']['exclude'] = TRUE;
$handler->display->display_options['fields']['body']['alter']['max_length'] = '150';
$handler->display->display_options['fields']['body']['alter']['strip_tags'] = TRUE;
$handler->display->display_options['fields']['body']['alter']['trim'] = TRUE;
$handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
$handler->display->display_options['fields']['body']['settings'] = array(
  'trim_length' => '200',
  'class' => '',
);
/* Trường: Nội dung: Post date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'node';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = '';
$handler->display->display_options['fields']['created']['exclude'] = TRUE;
$handler->display->display_options['fields']['created']['alter']['strip_tags'] = TRUE;
$handler->display->display_options['fields']['created']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['created']['date_format'] = 'custom';
$handler->display->display_options['fields']['created']['custom_date_format'] = 'd/m/Y';
$handler->display->display_options['fields']['created']['second_date_format'] = 'long';
/* Trường: Nội dung: Hình ảnh */
$handler->display->display_options['fields']['field_image']['id'] = 'field_image';
$handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image']['label'] = '';
$handler->display->display_options['fields']['field_image']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image']['type'] = 'image_url';
$handler->display->display_options['fields']['field_image']['settings'] = array(
  'url_type' => '1',
  'image_style' => '400x250',
  'image_link' => '',
  'class' => 'img-responsive',
);
/* Trường: Nội dung: Đường dẫn */
$handler->display->display_options['fields']['path']['id'] = 'path';
$handler->display->display_options['fields']['path']['table'] = 'node';
$handler->display->display_options['fields']['path']['field'] = 'path';
$handler->display->display_options['fields']['path']['label'] = '';
$handler->display->display_options['fields']['path']['exclude'] = TRUE;
$handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
/* Trường: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="article blog_Grid">
    <a href="[path]" class="article-image"><img src="[field_image]"></a>
    <div class="articleinfo_group">
        <div class="article-title">
            <h2 class="article-name">[title]</h2>
        </div>
        <ul class="article-info list-inline">
            <li class="article-date"><i class="fa fa-clock-o"></i>[created]</li>
        </ul>
        <div class="article-content">
            <p>[body]</p>
        </div>
    </div>
</div>';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: Global: Random */
$handler->display->display_options['sorts']['random']['id'] = 'random';
$handler->display->display_options['sorts']['random']['table'] = 'views';
$handler->display->display_options['sorts']['random']['field'] = 'random';
$handler->display->display_options['block_description'] = 'Tin tức block front';

/* Display: Báo giá */
$handler = $view->new_display('page', 'Báo giá', 'page_bao_gia');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Báo giá';
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['style_options']['default_row_class'] = FALSE;
$handler->display->display_options['style_options']['row_class_special'] = FALSE;
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['row_options']['default_field_elements'] = FALSE;
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['exclude'] = TRUE;
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Trường: Nội dung: Đường dẫn */
$handler->display->display_options['fields']['path']['id'] = 'path';
$handler->display->display_options['fields']['path']['table'] = 'node';
$handler->display->display_options['fields']['path']['field'] = 'path';
$handler->display->display_options['fields']['path']['label'] = '';
$handler->display->display_options['fields']['path']['exclude'] = TRUE;
$handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
/* Trường: Trường: Ảnh */
$handler->display->display_options['fields']['field_image']['id'] = 'field_image';
$handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image']['label'] = '';
$handler->display->display_options['fields']['field_image']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image']['type'] = 'image_url';
$handler->display->display_options['fields']['field_image']['settings'] = array(
  'url_type' => '1',
  'image_style' => '944x300',
  'image_link' => '',
  'class' => '',
);
/* Trường: Nội dung: Updated date */
$handler->display->display_options['fields']['changed']['id'] = 'changed';
$handler->display->display_options['fields']['changed']['table'] = 'node';
$handler->display->display_options['fields']['changed']['field'] = 'changed';
$handler->display->display_options['fields']['changed']['label'] = '';
$handler->display->display_options['fields']['changed']['exclude'] = TRUE;
$handler->display->display_options['fields']['changed']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['changed']['date_format'] = 'custom';
$handler->display->display_options['fields']['changed']['custom_date_format'] = 'l, d/m/Y - g:i';
$handler->display->display_options['fields']['changed']['second_date_format'] = 'long';
/* Trường: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="bao-gia-item">
    <a href="[path]" class="article-image hidden-xs"><img src="[field_image]"></a>
    <h3 class="bg-text">[title]</h3>
    <span class="bg-updated">Lần cập nhật cuối: [changed]</span>
</div>';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Nội dung: Published status */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Nội dung: Kiểu */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'bao_gia' => 'bao_gia',
);
$handler->display->display_options['path'] = 'bao-gia';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Tin tức';
$handler->display->display_options['menu']['name'] = 'main-menu';

/* Display: Báo giá khác */
$handler = $view->new_display('block', 'Báo giá khác', 'block_bg_khac');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Bảng giá khác';
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['row_options']['default_field_elements'] = FALSE;
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['exclude'] = TRUE;
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Trường: Trường: Ảnh */
$handler->display->display_options['fields']['field_image']['id'] = 'field_image';
$handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
$handler->display->display_options['fields']['field_image']['field'] = 'field_image';
$handler->display->display_options['fields']['field_image']['label'] = '';
$handler->display->display_options['fields']['field_image']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_image']['settings'] = array(
  'image_style' => '944x300',
  'image_link' => 'content',
  'class' => '',
);
/* Trường: Nội dung: Updated date */
$handler->display->display_options['fields']['changed']['id'] = 'changed';
$handler->display->display_options['fields']['changed']['table'] = 'node';
$handler->display->display_options['fields']['changed']['field'] = 'changed';
$handler->display->display_options['fields']['changed']['label'] = '';
$handler->display->display_options['fields']['changed']['exclude'] = TRUE;
$handler->display->display_options['fields']['changed']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['changed']['date_format'] = 'custom';
$handler->display->display_options['fields']['changed']['custom_date_format'] = 'd/m/Y - g:i';
$handler->display->display_options['fields']['changed']['second_date_format'] = 'long';
/* Trường: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="bao-gia-khac">
    <h3 class="bgk-text">[title]</h3>
    <span class="bgk-updated"><i class="fa fa-clock-o"></i> [changed]</span>
</div>';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Nội dung: Published status */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Nội dung: Kiểu */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'bao_gia' => 'bao_gia',
);
/* Filter criterion: Related Content: Content Type */
$handler->display->display_options['filters']['related_content_type']['id'] = 'related_content_type';
$handler->display->display_options['filters']['related_content_type']['table'] = 'node';
$handler->display->display_options['filters']['related_content_type']['field'] = 'related_content_type';
$handler->display->display_options['block_description'] = 'Bảng giá khác';
$translatables['tin_tuc'] = array(
  t('Master'),
  t('Tin tức'),
  t('more'),
  t('Apply'),
  t('Thiết lập lại'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Page'),
  t('<div class="article clearfix blog_List">

        <a href="[path]" class="article-image"><img src="[field_image]"></a>

    <div class="articleinfo_group">
        <div class="article-title">
            <h2 class="article-name">[title]</h2>
        </div>
        <ul class="article-info list-inline">
            <li class="article-date"><i class="fa fa-clock-o"></i> [created]</li>
        </ul>
        <div class="article-content">
            <p>[body]</p>
        </div>
    </div>
</div>'),
  t('Bài viết liên quan'),
  t('Tất cả'),
  t('Sản phẩm bán chạy Front'),
  t('Sản phẩm bán chạy'),
  t('<div class="container"><div class="row">
	<div class="prosli_group">
<div class="page-title">
	<h2>Sản phẩm bán chạy</h2>
</div></div>
</div>
</div>'),
  t('<div class="row-container product list-unstyled clearfix">
														<div class="row-left">
															<a href="[path]" title="[title_1]" class="hoverBorder container_item">
																<div class="hoverBorderWrapper">
																	[field_image]
																	<div class="mask"></div>
																	[field_image_1]
																</div>
															</a>

															<div class="hover-mask">
																<div class="group-mask">
																	<div class="inner-mask">
																		<div class="group-actionbutton">

																			<ul class="quickview-wishlist-wrapper">
																				<li class="quickview hidden-xs hidden-sm">
																					<div class="product-ajax-cart">
																						<span class="overlay_mask"></span>
																						<div data-handle="neque-porro-quisquam-est-qui-dolor-ipsum-quia-11" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																							<a class="[path]" title="[title_1]"><i class="fa fa-search" title="Xem nhanh"></i></a>
																						</div>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<!--inner-mask-->
																</div>
																<!--Group mask-->
															</div>
														</div>
														<div class="row-right animMix">
															<div class="product-title"><h3>[title]</h3></div>

														</div>
													</div>'),
  t('Sản phẩm mới về'),
  t('<div class="container"><div class="row">
	<div class="prosli_group">
<div class="page-title">
	<h2>Sản phẩm mới về</h2>
</div></div>
</div>
</div>'),
  t('Mặt hàng mới giảm giá'),
  t('<div class="container"><div class="row">
	<div class="prosli_group">
<div class="page-title">
	<h2>Mặt hàng mới giảm giá</h2>
</div></div>
</div>
</div>'),
  t('Slider'),
  t('<div class="item image">
    [field_image]
</div>'),
  t('Tin tức nổi bật'),
  t('<div class="article clearfix">
    <a href="[path]" class="article-image"><img src="[field_image]"></a>
    <div class="articleinfo_group">
        <div class="article-title">
            <h2 class="article-name">[title]</h2>
        </div>
        <ul class="article-info list-inline">
            <li class="article-date"><i class="fa fa-clock-o"></i> [created]</li>
        </ul>
    </div>
</div>'),
  t('Tin tức liên quan'),
  t('Icon ngành hàng'),
  t('Ngành hàng'),
  t('<div class="nganh-hang-image">
    [field_image_1]
</div>'),
  t('Tin tức block front'),
  t('<div class="article blog_Grid">
    <a href="[path]" class="article-image"><img src="[field_image]"></a>
    <div class="articleinfo_group">
        <div class="article-title">
            <h2 class="article-name">[title]</h2>
        </div>
        <ul class="article-info list-inline">
            <li class="article-date"><i class="fa fa-clock-o"></i>[created]</li>
        </ul>
        <div class="article-content">
            <p>[body]</p>
        </div>
    </div>
</div>'),
  t('Báo giá'),
  t('<div class="bao-gia-item">
    <a href="[path]" class="article-image hidden-xs"><img src="[field_image]"></a>
    <h3 class="bg-text">[title]</h3>
    <span class="bg-updated">Lần cập nhật cuối: [changed]</span>
</div>'),
  t('Báo giá khác'),
  t('Bảng giá khác'),
  t('<div class="bao-gia-khac">
    <h3 class="bgk-text">[title]</h3>
    <span class="bgk-updated"><i class="fa fa-clock-o"></i> [changed]</span>
</div>'),
);
