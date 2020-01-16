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
            @include('includes.user/partials/userblock')
        @endforeach
        </div>
    </div>
    @endif
    <script>
        var token = '{{Session::token()}}';
        var url = "{{route('follow')}}";
    </script>
@endsection