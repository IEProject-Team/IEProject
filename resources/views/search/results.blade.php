@extends('.layouts.master')

@section('content')
    <h4><i>Your search results for "{{ Request::input('search_query')}}" (email or id): </i></h4>
    @if(!$search_results->count())
        <p>No results found, sorry:(</p>
    @else
    <div class="row">
        <div class="col-md-12">
        <hr>
        @foreach($search_results as $search_result)
            <!--@include('includes.user/partials/userblock')-->
            <div class="media">
            <div class="media-body">
            <br>
             <h5 class="Media-heading">Id : <a id="userid" href="#">{{$search_result->getID()}}</a></h5>
             <h5 class="Media-heading">First Name : <a href="#">{{$search_result->getFirstName()}}</a></h5>
             <h5 class="Media-heading">Email : <a href="#">{{$search_result->getEmail()}}</a></h5>
             <h5 class="Media-heading">Email : <a href="#">"{{Request::input('token')}}"</a></h5>

             <form class="form-inline" action="">
              <button class="btn btn-primary btn-block" id="btnfollow" type="submit" data-followingid="{{ $search_result->getID() }}" >Follow/Unfollow</button>

            </form>
            <hr>
         </div>
 
    </div>

        @endforeach
        </div>
    </div>
    @endif
   <script>
       var token = "{{Request::input('token')}}";
       var urlFollow = '{{route('follow')}}';
   </script>
@endsection