@extends('.layouts.master')

@section('content')
    <h3>Your search results for "{{ Request::input('search_query')}}" (email or id): </h3>
    @if(!$search_results->count())
        <p>No results found, sorry:(</p>
    @else
    <div class="row">
        <div class="col-md-12">
        @foreach($search_results as $search_result)
            @include('includes.user/partials/userblock')
        @endforeach
        </div>
    </div>
    @endif
@endsection