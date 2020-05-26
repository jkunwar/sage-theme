<?php
	namespace App\Traits;

/**
 * Custom Query
 *
 */
trait CustomQuery {

	/**
	 * @param array $args
	 *
	 * @return array
	 */
	public static function execute($args) {

		$query = new \WP_Query($args);

		$items = [];

		if($query->post_count  > 0) {
			
			$items = array_map(function($post) {
				$author_id = get_post_field ('post_author', $post->id);

				$thumbnail = get_the_post_thumbnail_url($post->ID);
				$title = get_the_title( $post->ID );
				$permalink = get_permalink($post->ID);
				$excerpt = wp_trim_words(get_the_excerpt($post->ID), 30);
				$author = get_the_author_meta( 'nickname', $author_id );
				$categories = get_the_category_list(', ', '',  $post->id);
				$time = get_the_time('F j, Y', $post->id );

				return (object) [
					'thumbnail' => $thumbnail,
					'title'	=> $title,
					'permalink'	=> $permalink,
					'excerpt'	=> $excerpt,
					'author'	=> $author,
					'categories' => $categories,
					'time'		=> $time
				];
			}, $query->posts);

		}
		wp_reset_query(); 

		return  $items;
	}
}