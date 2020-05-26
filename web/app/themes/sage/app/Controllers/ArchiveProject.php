<?php

namespace App\Controllers;

use  App\Traits\CustomQuery;
use Sober\Controller\Controller;

/**
 * Archive Project
 */
class ArchiveProject extends Controller
{
	
	public function projects() {

   		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = [
			'post_type' => 'project',
			'posts_per_page' => 2,
			'paged' => $paged
		];

		$projects = CustomQuery::execute($args);

		return $projects;
	}

	public function total_items() {

		return wp_count_posts('project');
	}
}