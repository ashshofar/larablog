@extends('layouts.master')

@section('title')
	Blog Index
@endsection

@section('content')
	
	<div class="page-header">
        <div class="row">
        	<div class="col-lg-12">
            </div>
       	</div>
    </div>

    <div class="row">
		<div class="col-lg-12">

			@foreach($posts as $post)
				<div class="panel panel-default">
		  			<div class="panel-body">
			    		<h3 class="card-title">{{ $post->title }}</h4>
					    <h5 class="card-subtitle mb-2 text-muted">{{ $post->author }} | {{ $post->created_at }}</h6>
					    <p>{{ $post->body }}</p>
						<a href="">Read More</a>
		  			</div>
				</div>
			@endforeach
			
			@if($posts->lastPage() >1 )
				@if($posts->currentPage() !== 1)
					<a href="{{ $posts->previousPageUrl() }}"><i class="fa fa-caret-left"></i></a>
				@endif
				@if($posts->currentPage() !== $posts->lastPage())
					<a href="{{ $posts->previousPageUrl() }}"><i class="fa fa-caret-right"></i></a>
				@endif
			@endif

		</div>
	</div>

	<section>
		
	</section>
@endsection