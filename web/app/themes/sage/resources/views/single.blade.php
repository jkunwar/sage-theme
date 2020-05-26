@extends('layouts.app')

@section('content')
  	
   	<h2 class="page-heading">{{ $title }}</h2>
		
    <div id="post-container">
        <section id="blogpost">
            <div class="card">
                <div class="card-meta-blogpost">
					Posted by {{ $author }}  on {{ $published_date }}
					@if(get_post_type() == 'post')
						in <a href="#">{!! $categories !!}</a>
					@endif
                </div>
                <div class="card-image">
                    <img src="{{ $thumbnail_url }}" alt="card image">
                </div>
                <div class="card-description">
                   {!! $content !!}
                </div>
            </div>
 
            @include('partials.comments')
 
        </section>

           
        <aside id="sidebar">
            @php dynamic_sidebar('main_sidebar'); @endphp
        </aside>
    </div>

@endsection
