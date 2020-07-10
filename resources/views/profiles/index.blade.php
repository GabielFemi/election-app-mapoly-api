@extends ('layouts.app')


@section('content')
<section class="random-div bg-not-too-white text-mpgray">
<div class="mx-auto text-center text-semibold">
	<div class="alert alert-success">The developers hard work have paid off, you can now edit your profile</div>
</div>

	<h1 class="text-center py-15px text-35px text-semibold">Your profile</h1>
	
	<div class="text-center">
		<img class = "rounded-img img-responsive voting-icon" src="{{ asset('img/male.webp') }}">
	</div>
	
	
	<profile></profile>

	<div class="text-center">
		<a href = "{{ action ('Web\ProfileController@edit_profile') }}" class="btn text-white text-caps btn-info edit">Edit</a>	
	</div>
		

	
	
</section>
@endsection