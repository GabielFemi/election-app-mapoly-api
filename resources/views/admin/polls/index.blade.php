@extends ('layouts.app')
@section ('content')


<div class="container">
        <div class="row justify-content-center">
         <div class="mx-auto my-3 col-md-6">
        <div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-mpblue">
          <h2 class="text-headline text-white">Polls, sessions and links</h2>
          <div class="end-of-story-button mt-20px">
            <a href = "/admin/polls-sessions-links" class="py-3 br-10px px-4 bg-msblue-600  text-caps">View -></a>
          </div>
        </div>
      </div>
        </div>
    </div>
    @can ('create poll')
  <div class="container">
          <div class="row justify-content-center">
           <div class="mx-auto my-3 col-md-6">
          <div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-success">
            <h2 class="text-headline text-white">Start a new poll</h2>
            <div class="end-of-story-button mt-20px">
              <a href = "/admin/polls/create" class="py-3 br-10px px-4 bg-light text-dark text-caps">Start!</a>
            </div>
          </div>
        </div>
          </div>
      </div>
    @endcan
    @endsection