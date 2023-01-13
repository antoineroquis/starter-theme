<?php
/** 
Template Name: Archive spectacles
Template Post Type: post, page, product
**/


$templates = array( 'archive-spectacles.twig', 'index.twig' );

$context = Timber::context();

$context['title'] = 'Archive spectacles';

$args = array(
	'post_type' => 'spectacle',
);

$context['posts'] = Timber::get_posts( $args );

Timber::render( $templates, $context );




