<?php get_header(); ?>
	<article id="post-not-found" class="hentry clearfix">
		<header class="article-header">
			<h1><?php _e( 'Page Not Found', 'bonestheme' ); ?></h1>
		</header>
		<section class="entry-content">
			<p><?php _e( 'The page you were looking for was not found, but maybe try looking again!', 'bonestheme' ); ?></p>
		</section>
		<section class="search">
			<p><?php get_search_form(); ?></p>
		</section>
	</article>
<?php get_footer(); ?>
