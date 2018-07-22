@extends('layouts.master')

@section('content')
	<div class="col-sm-8 blog-main">
		<h2>Create a Post</h2>
		<hr>
		<form method="POST" action="/posts">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="title">Post Title</label>
				<input type="text" name="title" class="form-control" id="exampleInputEmail1">
			</div>
			<div class="form-group">
				<label for="content">Post content</label>
				<textarea class="form-control" rows="5" id="body" name="body"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Publish</button>
			</div>

			@include('layouts.errors')
		</form>
	</div>
@endsection