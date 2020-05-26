@extends('layouts.app')

@section('content')
    
    <h2 class="page-heading"> All blogs</a></h2>
    
    <section>
        @include('partials.post-items', ['items' => $blogs])
    </section>
    
    <div class="pagination">
        @php echo paginate_links() @endphp
    </div>

@endsection
