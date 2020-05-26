@extends('layouts.app')

@section('content')

    @if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif

  
    <h2 class="page-heading">Search Results for: <?php echo get_search_query(); ?></a></h2>

    <?php

        if(have_posts()) { 
    ?>
    <section>

        <?php
            while (have_posts()) {
                the_post();
        ?>
        <div class="card">
            <div class="card-image">
                <a href="<?php echo the_permalink() ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                </a>
            </div>

            <div class="card-description">
                <a href="<?php echo the_permalink(); ?> ">
                    <h3> <?php the_title(); ?> </h3>
                </a>
                <div class="card-meta">
                    Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?> 
                    <?php 
                        if(get_post_type() == 'post') { ?>
                            in <a href="#"><?php echo get_the_category_list( ','); ?></a>
                    <?php } ?>
                </div>
                <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                <a href="<?php echo the_permalink(); ?> " class="btn-readmore">Read more</a>
            </div>
        </div>

        <?php } wp_reset_query(); ?>
    </section>

    <div class="pagination">
        <?php echo paginate_links() ?>
    </div>

    <?php }  else { ?>
        <div class="no-results">
            <h2>Coldn't find anything :( Did you just mistype something?</h2>
            <h3>Don't Worry</h3>
            <h3>Check out the following links</h3>
            <ul>
                <li><a href="<?php echo site_url('/blog'); ?>">Blog List</a></li>
                <li><a href="<?php echo site_url('/project'); ?>">Projects List</a></li>
                <li><a href="<?php echo site_url('/about'); ?>">About Me</a></li>
                <li><a href="<?php echo site_url(); ?>">Home Page</a></li>
            </ul>
        </div>
    
    <?php } ?>

    {!! get_the_posts_navigation() !!}
@endsection
