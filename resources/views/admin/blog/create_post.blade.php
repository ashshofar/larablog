@extends('layouts.admin-master')

@section('content')
	
	<div class="page-header">
        <div class="row">
        	<div class="col-lg-12">
            </div>
       	</div>
    </div>

    <div class="row">
    	<div class="col-lg-2"></div>
		<div class="col-lg-10">
			@include('includes.info-box')
		</div>
		
		<div class="col-lg-12">
			
				<form class="form-horizontal" method="post" action="{{ route('admin.blog.post.create') }}">
				<fieldset>
				    <div class=" {{ $errors->has('title') ? 'form-group has-error' : 'form-group'}} ">
					    <label for="title" class="col-lg-2 control-label">Title</label>
					    <div class="col-lg-10">
						    <input type="text" class="form-control" id="title" name="title" value="{{ Request::old('title') }}">
					    </div>
					</div>
					<div class=" {{ $errors->has('author') ? 'form-group has-error' : 'form-group'}} ">
					    <label for="author" class="col-lg-2 control-label">Author</label>
					    <div class="col-lg-10">
						    <input type="text" class="form-control" id="author" name="author"value="{{ Request::old('author') }}">
					    </div>
					</div>
					<div class="form-group">
					    <label for="category_select" class="col-lg-2 control-label">Add Category</label>
					    <div class="col-lg-5">
						    <select name="category_select" id="category_select" class="form-control">
						    	<option value="Dummy Category ID">Dummy Category</option>
						    </select>
						</div>
						<div class="col-lg-5">
							<button type="button" class="btn btn-success">Add Category</button>
								<ul>
							    	
							    </ul>
							<input type="hidden" name="categories" id="categories">
						</div>
					</div>
					<div class=" {{ $errors->has('body') ? 'form-group has-error' : 'form-group'}} ">
					    <label for="body" class="col-lg-2 control-label">Body</label>
					    <div class="col-lg-10">
					    	<textarea class="form-control" rows="12" id="body" name="body">{{ Request::old('body') }}</textarea>
					    </div>
					</div>
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">	
					    	<button type="submit" class="btn btn-primary">Create Post</button>
					      	<input type="hidden" value="{{ Session::token() }}" name="_token" />
					    </div>
				    </div>
				</fieldset>
			</form>

		</div>
	</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ URL::secure('src/js/posts.js') }}"></script>
@endsection