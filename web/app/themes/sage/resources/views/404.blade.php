@extends('layouts.app')

@section('content')
	
	<div class="container-404">
		<h2 class="page-heading">Oh: What?? 404?</h2>
		<img src="http://source.unsplash.com/640x480/?cats">

		<h3>Sorry friend, I think you're lost. Plz try the following links.</h3>

		<ul>
			<li><a href="@php echo site_url('/blog'); @endphp">Blog List</a></li>
			<li><a href="@php echo site_url('/project'); @endphp">Projects List</a></li>
			<li><a href="@php echo site_url('/about'); @endphp">About Me</a></li>
			<li><a href="@php echo site_url(); @endphp">Home Page</a></li>
		</ul>
	</div>
@endsection
