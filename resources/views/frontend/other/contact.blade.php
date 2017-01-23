@extends('layouts.master')

@section('title')
	Contact me
@endsection

@section('content')
	<div class="page-header">
        <div class="row">
        	<div class="col-lg-12">
            	<h1>Contact Me</h1>
        	</div>
       	</div>
    </div>
	<div class="row">
		@include('includes.info-box')
			<form class="form-horizontal" method="post">
				<fieldset>
				    <div class="form-group">
					    <label for="name" class="col-lg-2 control-label">Name</label>
					    <div class="col-lg-10">
						    <input type="text" class="form-control" id="name" name="name">
					    </div>
					</div>
					<div class="form-group">
					    <label for="email" class="col-lg-2 control-label">E-mail</label>
					    <div class="col-lg-10">
						    <input type="text" class="form-control" id="email" name="email">
					    </div>
					</div>
					<div class="form-group">
					    <label for="subject" class="col-lg-2 control-label">Subject</label>
					    <div class="col-lg-10">
						    <input type="text" class="form-control" id="subject" name="subject">
					    </div>
					</div>
					<div class="form-group">
					    <label for="quote" class="col-lg-2 control-label">Your Message</label>
					    <div class="col-lg-10">
					    	<textarea class="form-control" rows="10" id="message" name="message"></textarea>
					    </div>
					</div>
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">	
					    	<button type="submit" class="btn btn-primary">Submit</button>
					      	<input type="hidden" value="{{ Session::token() }}" name="_token" />
					    </div>
				    </div>
				</fieldset>
			</form>
	</div>
@endsection 