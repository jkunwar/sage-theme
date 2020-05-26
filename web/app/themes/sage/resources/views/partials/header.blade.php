<header>
  	<div id="slideout-menu">
		<ul>
			<li>
				<a href="<?php echo $base_url?>" 
					<?php if(is_front_page()) echo 'class="active"' ?> 
				> Home </a>
			</li>
			<li>
				<a href="<?php echo $base_url?>/blog"
					<?php if(get_post_type() == 'post') echo "class='active'"; ?>
				>Blog</a>
			</li>
			<li>
				<a href="<?php echo $base_url?>/project"
					<?php if(get_post_type() == 'project') echo 'class="active"' ?> 
				>Projects</a>
			</li>
			<li>
				<a href="<?php echo $base_url?>/about"
					<?php if(is_page('about')) echo "class='active'"; ?>
				>About</a>
			</li>
			<div class="searchbox-slide-men">
				<?php get_search_form(); ?>
			</div>
		</ul>
	</div>
	<nav>
		<div id="logo-img">
			<a href="<?php echo $base_url?>">
				<img src="@asset('images/logo.png')" alt="GTCoding-Logo">
			</a>
		</div>
		<div id="menu-icon">
			<i class="fas fa-bars"></i>
		</div>
		<ul>
			<li>
				<a href="<?php echo $base_url?>" 
					<?php if(is_front_page()) echo 'class="active"' ?> 
				> Home </a>
			</li>
			<li>
				<a href="<?php echo $base_url?>/blog"
					<?php if(get_post_type() == 'post') echo "class='active'"; ?>
				>Blog</a>
			</li>
			<li>
				<a href="<?php echo $base_url?>/project"
					<?php if(get_post_type() == 'project') echo 'class="active"'; ?> 
				>Projects</a>
			</li>
			<li>
				<a href="<?php echo $base_url?>/about"
					<?php if(is_page('about')) echo "class='active'"; ?>
				>About</a>
			</li>
			<li>
				<div id="search-icon">
					<i class="fas fa-search"></i>
				</div>
			</li>
		</ul>
	</nav>

	<div id="searchbox">
		<?php get_search_form(); ?>
	</div>
</header>
