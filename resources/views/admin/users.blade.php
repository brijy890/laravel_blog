@extends('admin.layouts.app')

@section('top-nav')
	@include('admin.layouts.nav')
@endsection

@section('sidebar')
	@include('admin.layouts.sidebar')
@endsection

@section('header')
	@include('admin.layouts.header')
@endsection

@section('content')
	
@endsection

@section('footer-scripts')
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/js/vendor/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
@endsection