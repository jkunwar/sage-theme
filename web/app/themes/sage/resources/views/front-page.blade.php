@extends('layouts.app')

@section('content')
	
	@if(count($blogs) > 0)
		<h2 class="section-heading">
			<a href="@php echo site_url('/blog'); @endphp">All blogs</a>
		</h2>
		
		<section>
			@include('partials.post-items', ['items' => $blogs])
		</section>
	@endif

	@if(count($projects))
		<h2 class="section-heading">
			<a href="@php echo site_url('/project'); @endphp">All Projects</a>
		</h2>
		
		<section>
			@include('partials.post-items', ['items' => $projects])
		</section>
	@endif

	<h2 class="section-heading">Source Code</h2>
	<section id="section-source">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<a href="#" class="btn-readmore">Github Profile</a>
	</section>
@endsection
