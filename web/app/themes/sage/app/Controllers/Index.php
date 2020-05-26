<?php

namespace App\Controllers;

use  App\Traits\CustomQuery;
use Sober\Controller\Controller;

class Index extends Controller
{
	
	public function blogs() {

   		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = [
			'post_type' => 'post',
			'posts_per_page' => 2,
			'paged' => $paged
		];

		$blogs = CustomQuery::execute($args);

		return $blogs;
	}

	public function total_items() {

		return wp_count_posts('post');
	}

}