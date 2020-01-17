@extends('.layouts.master')

@section('content')
    <h4><i>Your Friends : </i></h4>
    @if(!$user_friends->count())
        <p>You don't have any friend, sorry:(</p>
    @else
    <div class="row">
        <div class="col-md-12">
        <hr>
        @foreach($user_friends as $user_friend)
            @include('includes.user/partials/userfriends')
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