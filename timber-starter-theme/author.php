<?php
/**
 * The template for displaying Author Archive pages
 *
 * Methods for PostMaster and WPHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.1
 */
	global $wp_query;

	$data = Timber::get_context();
	$data['posts'] = Timber::loop_to_posts();

	$author = new TimberUser($wp_query->query_vars['author']);
	$data['author'] = $author;
	$data['title'] = 'Author Archives: '.$author->name();

	render_twig(array('author.html', 'archive.html'), $data);
?>