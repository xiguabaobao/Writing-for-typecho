<!DOCTYPE html>
<!--
******主题信息******
* Theme Name: Writing for typecho
* Theme URI: http://themes.xiguabaobao.com/Writing-for-typecho/
* Description: Writing主题（免费） BUG反馈：<a href="http://themes.xiguabaobao.com/Writing-for-typecho/#respond">西瓜宝宝主题</a>
* Author: 西瓜宝宝主题
* Author URI: http://themes.xiguabaobao.com
* Version: 1.0
* © 2014 themes.xiguabaobao.com. All rights reserved.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>
        <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
    </title>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>?20140825">

	<!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
	<div class="header">
		<div class="container">
			<a href="<?php $this->options->siteUrl(); ?>" class="site-title">
				<?php $this->options->title(); ?>
			</a>
			
			<p class="site-description"><?php $this->options->description() ?></p>

			<div class="nav" role="navigation">
				<a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
	            <a href="http://themes.xiguabaobao.com/"><?php _e('主题'); ?></a>
	            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
	            <?php while($pages->next()): ?>
	                <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
	            <?php endwhile; ?>
			</div>
		</div>
	</div>