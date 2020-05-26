<?php

namespace App\Controllers;

use  App\Traits\CustomQuery;
use Sober\Controller\Controller;

class FrontPage extends Controller
{
	public function blogs() {

		$args = [
			'post_type' => 'post',
			'posts_per_page' => 2,
		];

		$blogposts = CustomQuery::execute($args);

		return $blogposts;
	}

	public function projects() {
		$args = [
			'post_type' => 'project',
			'posts_per_page' => 2,
		];

		$projects = CustomQuery::execute($args);

		return $projects;
	}
}
