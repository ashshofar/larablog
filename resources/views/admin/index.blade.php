@extends('layouts.admin-master')

@section('content')
	
	<div class="page-header">
        <div class="row">
        	<div class="col-lg-12">
            </div>
       	</div>
    </div>
	
	@include('includes.info-box')
	
	<div class="row">
		<div class="col-lg-7">

			
		
			<div class="panel panel-default">
		  		<div class="panel-heading">
					<a href=" {{ route('admin.blog.create_post') }}" class="btn btn-primary">New Post</a>
					<a href="" class="btn btn-info">Show all Posts</a>
		  		</div>
		  		<div class="panel-body">
		   	 		<div class="panel panel-default">
		  				<div class="panel-body">
		    				<h4 class="card-title">No Posts</h4>
						</div>
					</div>

					<div class="panel panel-default">
		  				<div class="panel-body">
		    				<h4 class="card-title">Post Title</h4>
						    <h6 class="card-subtitle mb-2 text-muted">Post Author | Date</h6>
						    <a href="" class="btn btn-success btn-xs">View Post</a>
							<a href="" class="btn btn-info btn-xs">Edit</a>
							<a href="" class="btn btn-danger btn-xs">Delete</a>
		  				</div>
					</div>

					<div class="panel panel-default">
		  				<div class="panel-body">
		    				<h4 class="card-title">Post Title</h4>
						    <h6 class="card-subtitle mb-2 text-muted">Post Author | Date</h6>
						    <a href="" class="btn btn-success btn-xs">View Post</a>
							<a href="" class="btn btn-info btn-xs">Edit</a>
							<a href="" class="btn btn-danger btn-xs">Delete</a>
		  				</div>
					</div>

					<div class="panel panel-default">
		  				<div class="panel-body">
		    				<h4 class="card-title">Post Title</h4>
						    <h6 class="card-subtitle mb-2 text-muted">Post Author | Date</h6>
						    <a href="" class="btn btn-success btn-xs">View Post</a>
							<a href="" class="btn btn-info btn-xs">Edit</a>
							<a href="" class="btn btn-danger btn-xs">Delete</a>
		  				</div>
					</div>
		 		</div>
			</div>
		</div>

		<div class="col-lg-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="" class="btn btn-primary">Show all Message</a>
				</div>
				<div class="panel-body">
			    	<div class="panel panel-default">
		  				<div class="panel-body">
		    				<h4 class="card-title">No Message</h4>
						</div>
					</div>
					
					<div class="panel panel-default" data-message="Body" data-id="ID">
		  				<div class="panel-body">
		    				<h4 class="card-title">Message Subject</h4>
						    <h6 class="card-subtitle mb-2 text-muted">Sender .... | Date</h6>
						    <a href="" class="btn btn-success btn-xs">View</a>
							<a href="" class="btn btn-danger btn-xs">Delete</a>
		  				</div>
					</div>

					<div class="panel panel-default" data-message="Body" data-id="ID">
		  				<div class="panel-body">
		    				<h4 class="card-title">Message Subject</h4>
						    <h6 class="card-subtitle mb-2 text-muted">Sender .... | Date</h6>
						    <a href="" class="btn btn-success btn-xs">View</a>
							<a href="" class="btn btn-danger btn-xs">Delete</a>
		  				</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="contact-message-info">
		<button class="btn btn-primary" id="modal-close">Close</button>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		var token = "{{ Session::token() }}";
	</script>

@endsection