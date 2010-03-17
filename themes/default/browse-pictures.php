<?php
/*
Template Name: Browse pictures
*/

get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">

		<?php get_browse_content() ?>

    <?php comments_template(); ?>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
