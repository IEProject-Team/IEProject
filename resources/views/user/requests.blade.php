@extends('.layouts.master')

@section('content')
    <h4><i>Your Requests : </i></h4>
    @if(!$user_requests->count())
        <p>You don't have any Request, sorry:(</p>
        <!--<form class="form-inline" action="{{ route('getbackdashboard')}}">
             <button class="btn btn-dark btn-block" type="submit">Back</button>
        </form> -->
    @else
    <div class="row">
        <div class="col-md-12">
        <hr>
        @foreach($user_requests as $user_request)
            @include('includes.user/partials/userrequests')
        @endforeach
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
             <form class="form-inline" action="{{ route('getbackdashboard')}}">
                   <button class="btn btn-dark btn-block" type="submit">Back</button>
             </form>
         </div>
    </div>
@endsection
