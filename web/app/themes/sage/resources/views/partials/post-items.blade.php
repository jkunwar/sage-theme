@if (isset($items) && count($items) > 0)

	@foreach ($items as  $item)
		<div class="card">
			<div class="card-image">
				<a href="{{ $item->permalink }}">
					<img src="{{ $item->thumbnail }}" alt="Card Image">
				</a>
			</div>

			<div class="card-description">
				<a href="{{ $item->permalink }}">
					<h3> {{ $item->title }} </h3>
				</a>
				 <div class="card-meta">
                    Posted by {{ $item->author }} on {{ $item->time }}
                    @if ($item->categories)
                    	in <a href="#"> {!! $item->categories !!} </a>
                    @endif
                </div>
				<p>{{ $item->excerpt }}</p>
				<a href="{{ $item->permalink }}" class="btn-readmore">Read more</a>
			</div>
		</div>
			
	@endforeach

@endif