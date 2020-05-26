<?php

namespace App\Controllers;

use Sober\Controller\Controller;

/**
  * Single Page
  */
 class Single extends Controller
 {
 	
 	public function post_id() {

 		return get_the_ID();
 	}

 	public function title() {

 		return get_the_title( $this->post_id() );
 	}

 	public function thumbnail_url() {

 		$src = wp_get_attachment_image_src(get_post_thumbnail_id($this->post_id()), 'large', true);
 		return $src[0];
 	}

 	public function author() {

 		$author_id = get_post_field ('post_author', $this->post_id());
 		return get_the_author_meta( 'nickname', $author_id );
 	}

 	public function content() {

 		return get_the_content( '', '', $this->post_id() );
 	}

 	public function categories() {

 		return get_the_category_list(', ', '',  $this->post_id());
 	}

 	public function published_date() {

 		return get_the_time('F j, Y', $this->post_id() );
 	}

 	// public function post() {
 	// 	$post_id = $this->post_id();

 	// 	$post['time'] = get_the_time('F j, Y', $post_id );
 	// 	$post['title'] = get_the_title($post_id);
 	// 	$post['author'] = get_the_author();
 	// 	$post['content'] = get_the_content('', '', $post_id);
 	// 	$post['thumbnail'] = get_the_post_thumbnail_url($post_id);
 	// 	$post['categories'] = get_the_category_list(',', '', $post_id);

 	// 	return (object)$post;
 	// }

 	public function comments() {
 		$post_id = $this->post_id();

 		$comments = get_comments([
				'post_id' => $post_id,
				'status' => 'approve'
			]);	

		return $comments;
 	}
 }
