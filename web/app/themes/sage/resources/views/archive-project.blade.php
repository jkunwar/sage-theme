@extends('layouts.app')

@section('content')
	<h2 class="page-heading"> All Projects</h2>
	
	<section>
	  	@include('partials.post-items', ['items' => $projects])
	</section>

	<div class="pagination">
        @php echo paginate_links() @endphp
    </div>
@endsection
