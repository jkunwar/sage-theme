@extends('layouts.app')

@section('content')
  	@while(have_posts()) @php the_post() @endphp
    	{{-- @include('partials.page-header')
    	@include('partials.content-page') --}}

		<h2 class="page-heading"><?php the_title(); ?> </h2>
	    <div id="post-container">
	        <section id="blogpost">
	            <div class="card">
	            	<?php if(has_post_thumbnail()) { ?>
		                <div class="card-image">
		                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?> " alt="card image">
		                </div>
	                <?php }?>
	                <div class="card-description">
	                    <?php the_content(); ?>
	                </div>
	            </div>
	        </section>


	        <aside id="sidebar">
	            <?php dynamic_sidebar('main_sidebar') ?>
	        </aside>
	    </div>
  @endwhile
@endsection
