@extends('.layouts.master')

@section('content')
    <h4><i>Your Requests : </i></h4>
    @if(!$user_requests->count())
        <p>You don't have any Request, sorry:(</p>
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
@endsection