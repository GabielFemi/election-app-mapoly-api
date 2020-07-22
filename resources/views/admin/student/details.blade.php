@extends ('layouts.app')

@section('content')
<section class="random-div bg-not-too-white text-mpgray">
	<h1 class="text-center py-15px text-35px text-semibold">User profile</h1>
	
	<div class="text-center">
		<img class = "rounded-img img-responsive voting-icon" src="{{ asset('img/male.webp') }}">
	</div>
	
	<div>
		<h3 class="text-23px pt-5 pb-1 text-mpgray mx-auto random-div-title-description text-center">
			{{ $user->name }}
		</h3>

		<h4 class = "text-center">Your email address:  
			{{ $user->email }} 
		</h4>		
	</div>

	<div class="text-center">
		<a href = "#" class="btn text-white text-caps btn-danger edit">Delete</a>	
	</div>	
</section>
@endsection