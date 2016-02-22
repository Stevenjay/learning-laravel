@extends('app')

@section('content')


	@if ($first == "Steven")
	<h1>About Me: {{ $first }} {{ $last }}</h1>
	@else 
	<h1>About User</h1>
	@endif

	<p>Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


	@if (count($cars))
	<h1>My Favourite F1 Teams</h1>
	<ul>
		@foreach ($cars as $car)
			<li>{{ $car }}</li>
		@endforeach	
	</ul>
	@endif

@endsection